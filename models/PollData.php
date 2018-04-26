<?php

namespace kouosl\poll\models;

use Yii;

/**
 * This is the model class for table "poll_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $poll_id
 *
 * @property poll $poll
 */
class pollData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'poll_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'poll_id'], 'required'],
            [['poll_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['poll_id'], 'exist', 'skipOnError' => true, 'targetClass' => poll::className(), 'targetAttribute' => ['poll_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'poll_id' => 'poll ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getpoll()
    {
        return $this->hasOne(poll::className(), ['id' => 'poll_id']);
    }
}
