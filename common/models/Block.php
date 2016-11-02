<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "block".
 *
 * @property integer $id
 * @property string $username
 * @property string $title
 * @property string $content
 * @property string $keyword
 * @property string $pic
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Block extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'block';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content' ], 'required'],
            [['content'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'title', 'keyword', 'pic'], 'string', 'max' => 255],
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
            'content' => Yii::t('app', 'Content'),
            'keyword' => Yii::t('app', 'Keyword'),
            'pic' => Yii::t('app', 'Pic'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    public   function  beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
           $this->username = Yii::$app->user->identity->username;
            if ($insert) {
                $this->updated_at = time();
                $this->created_at = time();
            } else
                $this->updated_at = time();
            return TRUE;
        }
        else
            return  FALSE;
    }
}
