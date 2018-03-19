<?php

namespace kouosl\menu\models;

use Yii;

/**
 * This is the model class for table "menu_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $menu_id
 *
 * @property Menu $menu
 */
class MenuData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'menu_id'], 'required'],
            [['menu_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['menu_id' => 'id']],
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
            'menu_id' => 'Menu ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getmenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }
}
