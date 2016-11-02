<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "system".
 *
 * @property integer $id
 * @property string $webname
 * @property string $logo
 * @property string $tel
 * @property string $mail
 * @property string $keyword
 * @property string $description
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class System extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'system';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['webname' ], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['webname', 'logo', 'tel', 'mail', 'keyword', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'webname' => Yii::t('app', 'Webname'),
            'logo' => Yii::t('app', 'Logo'),
            'tel' => Yii::t('app', 'Tel'),
            'mail' => Yii::t('app', 'Mail'),
            'keyword' => Yii::t('app', 'Keyword'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public   function  beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {

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
