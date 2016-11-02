<?php

namespace common\models;

use Yii;
use common\helpers\Tree;
use yii\helpers\Url;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $username
 * @property string $title
 * @property integer $pid
 * @property integer $sort
 * @property string $pic
 * @property string $slug
 * @property string $type
 * @property string $keyword
 * @property string $description
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Category extends \yii\db\ActiveRecord
{

    private static $_items = array();
    private $cen;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['pid', 'sort', 'status', 'created_at', 'updated_at'], 'integer'],
            // [['pid'],'integer',]
            [['username', 'title', 'pic', 'slug', 'type', 'keyword', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'title' => Yii::t('app', 'Title'),
            'pid' => Yii::t('app', 'Pid'),
            'sort' => Yii::t('app', 'Sort'),
            'pic' => Yii::t('app', 'Pic'),
            'slug' => Yii::t('app', 'Slug'),
            'type' => Yii::t('app', 'Type'),
            'keyword' => Yii::t('app', 'Keyword'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public function beforeSave($insert)
    {

        if ($this->pid > 0) {
            $this->type = self::find()->select('type')->where(['id' => $this->pid])->scalar();
//             $ddd =self::find()->select('type')->where(['id'=>$this->pid])->scalar();

        }

        if (parent::beforeSave($insert)) {

            $this->username = Yii::$app->user->identity->username;

            if ($insert) {

                $this->updated_at = time();
                $this->created_at = time();
            } else
                $this->updated_at = time();

            return TRUE;
        } else
            return FALSE;
    }


    public function getPtitle()
    {

        return static::find()->select('title')->where(['id' => $this->pid])->scalar();
    }

    public static function lists()
    {
        $list = Yii::$app->cache->get('categoryList');
        if ($list === false) {
            $list = static::find()->select('title')->indexBy('id')->column();
            Yii::$app->cache->set('categoryList', $list);
        }


        return $list;
    }

    public static function tree($list = null, $type = null)
    {
        if (is_null($list) and is_null($type)) {
            $list = self::find()->asArray()->all();
        } else {
            $list = self::find()->where(['type' => $type])->asArray()->all();
        }

        $tree = Tree::build($list);


        return $tree;
    }


    //前台分类列表
    public static function makelist($tree)
    {

        if (is_array($tree)) {
            foreach ($tree as $key => $value) {
                echo "<ul class=' list-group cen" . $key . " ' >";

                $title = $value['title'];
                $id = Url::to(['category/view', 'id' => $value['id']]);
                echo "<li class='list-group-item'> <a href=' $id'>$title</a></li> ";
                if (isset($value['children'])) {

                    $tree = $value['children'];
                    self::makelist($tree);
                }
                echo '</ul>';
            }
        }
    }

    public static function treeList($tree = null, &$result = [], $deep = 0, $separator = '--')
    {
        if (is_null($tree)) {
            $tree = self::tree();
        }
        $deep++;
        foreach ($tree as $list) {
            // 重复str_repeat   这个东西 $separator  $deep 次
            $list['title'] = str_repeat($separator, $deep - 1) . $list['title'];
            $result[] = $list;
            if (isset($list['children'])) {
                self::treeList($list['children'], $result, $deep, $separator);
            }
        }
        return $result;
    }

    //前台使用
    public static function treeListb($tree = null, &$result = [], $deep = 0, $separator = '　')
    {
        if (is_null($tree)) {
            $tree = self::tree();
        }
        $deep++;
        foreach ($tree as $list) {
            // 重复str_repeat   这个东西 $separator  $deep 次
            $list['title'] = str_repeat($separator, $deep - 1) . $list['title'];
            $result[] = $list;
            if (isset($list['children'])) {
                self::treeListb($list['children'], $result, $deep, $separator);
            }
        }

//        var_dump($result);
//        die();
        return $result;
    }

    /**
     * 分类名下拉列表
     */

    public static function getDropDownlist($tree = [], &$result = [], $deep = 0, $separator = '　')
    {
        if (empty($tree)) {
            $tree = self::tree($list = null);
        }
        $deep++;
        foreach ($tree as $list) {
            $result[$list['id']] = str_repeat($separator, $deep - 1) . '┗' . $list['title'];
            if (isset($list['children'])) {
                self::getDropDownlist($list['children'], $result, $deep);
            }
        }

//        var_dump($result);
//        die();
        return $result;
    }

    //产品类
    public static function getDropDownlistpro($tree = [], &$result = [], $deep = 0, $separator = '　　', $types = 2)
    {
        if (empty($tree)) {
            $tree = self::tree($list = null, $type = $types);
        }
        $deep++;
        foreach ($tree as $list) {
            $result[$list['id']] = str_repeat($separator, $deep - 1) . $deep > 1 ? '┗' : '' . $list['title'];
            if (isset($list['children'])) {
                self::getDropDownlist($list['children'], $result, $deep);
            }
        }

//        var_dump($result);
//        die();
        return $result;
    }

//新闻类
    public static function getDropDownlistnew($tree = [], &$result = [], $deep = 0, $separator = '　　', $types = 1)
    {
        if (empty($tree)) {
            $tree = self::tree($list = null, $type = $types);
        }
        $deep++;
        foreach ($tree as $list) {
            $result[$list['id']] = str_repeat($separator, $deep - 1) . $deep >= 2 ? '┗' : '' . $list['title'];
            if (isset($list['children'])) {
                self::getDropDownlist($list['children'], $result, $deep);
            }
        }

//        var_dump($result);
//        die();
        return $result;
    }

    public function getCategoryNameById($id)
    {
        $list = $this->lists();

        return isset($list[$id]) ? $list[$id] : null;
    }


    public static function getIdByName($name)
    {
        $list = self::lists();

        return array_search($name, $list);
    }

    public static function findByIdOrSlug($id)
    {
        if (intval($id) == 0) {
            $condition = ["slug" => $id];
        } else {
            $condition = [
                $id
            ];
        }

        return static::findOne($condition);
    }


    public static function finnamebyid($id)
    {
        return self::findOne(['titie'])->where(['id' => $id]);

    }

    //下拉列表  原始版本
    public static function items($module)
    {
        if (!isset(self::$_items[$module]))
            self::loadItems($module);
        return self::$_items[$module];
    }

    public static function item($module, $id)
    {
        if (!isset(self::$_items[$module]))
            self::loadItems($module);
        return isset(self::$_items[$module][$id]) ? self::$_items[$module][$id] : false;
    }

    private static function loadItems($module)
    {
        self::$_items[$module] = array();
        $models = self::findAll(['type' => $module]);
        foreach ($models as $model)
            self::$_items[$module][$model->id] = $model->title;
    }


}
