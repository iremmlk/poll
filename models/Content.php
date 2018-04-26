<?php

namespace kouosl\poll\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $picture
 *
 * @property data[] $data
 */
class poll extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description', 'picture'], 'string'],
            [['title'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'picture' => 'Picture',
            'body' => 'Body',
            'created_at' =>'Created At',
            'created_by' =>'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'category_id' => 'Category Id',
            'category' => 'Category'
        ];
    }

    public function getImagePath(){
        return sprintf("%s/poll/%s",Yii::getAlias ( '@data' ),$this->picture);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getData()
    {
        return $this->hasMany(pollData::className(), ['poll_id' => 'id']);
    }
}
