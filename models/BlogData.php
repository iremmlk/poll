<?php

namespace kouosl\blog\models;

use Yii;

/**
 * This is the model class for table "blog_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $blog_id
 *
 * @property Blog $blog
 */
class BlogData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'blog_id'], 'required'],
            [['blog_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['blog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::className(), 'targetAttribute' => ['blog_id' => 'id']],
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
            'blog_id' => 'Blog ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getblog()
    {
        return $this->hasOne(Blog::className(), ['id' => 'blog_id']);
    }
}
