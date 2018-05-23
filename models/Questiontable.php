<?php

namespace kouosl\poll\models;

use Yii;

/**
 * This is the model class for table "{{%questiontable}}".
 *
 * @property int $id
 * @property string $question
 * @property string $created_at
 * @property string $created_by
 */
class Questiontable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%questiontable}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question', 'created_by'], 'required'],
            [['created_at'], 'safe'],
            [['question', 'created_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'question' => Yii::t('app', 'Question'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
        ];
    }
}
