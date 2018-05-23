<?php

namespace kouosl\poll\models;

use Yii;

/**
 * This is the model class for table "{{%answertable}}".
 *
 * @property int $id
 * @property string $answer_id
 * @property string $answer_1
 * @property string $answer_2
 * @property string $answer_3
 * @property string $answer_4
 */
class Answertable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%answertable}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['answer_id'], 'required'],
            [['answer_1', 'answer_2', 'answer_3', 'answer_4'], 'string'],
            [['answer_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'answer_id' => Yii::t('app', 'Answer ID'),
            'answer_1' => Yii::t('app', 'Answer 1'),
            'answer_2' => Yii::t('app', 'Answer 2'),
            'answer_3' => Yii::t('app', 'Answer 3'),
            'answer_4' => Yii::t('app', 'Answer 4'),
        ];
    }
}
