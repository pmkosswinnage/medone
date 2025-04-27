<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "admin_module2".
 *
 * @property integer $id
 * @property string $mod_code
 * @property string $mod_name
 * @property string $mod_desc
 * @property string $mod_status
 * @property integer $mod_year
 *
 * @property AdminYear $modYear
 */
class AdminModule2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_module2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mod_code', 'mod_name', 'mod_desc', 'mod_status', 'mod_year'], 'required'],
            [['mod_desc', 'mod_status'], 'string'],
            [['mod_year'], 'integer'],
            [['mod_code'], 'string', 'max' => 20],
            [['mod_name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mod_code' => 'Mod Code',
            'mod_name' => 'Mod Name',
            'mod_desc' => 'Mod Desc',
            'mod_status' => 'Mod Status',
            'mod_year' => 'Mod Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getmodYear()
    {
        return $this->hasOne(AdminYear::className(), ['id' => 'mod_year']);
    }
}
