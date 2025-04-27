<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "admin_year".
 *
 * @property integer $id
 * @property integer $acad_year
 * @property string $acad_status
 *
 * @property AdminModule2[] $adminModule2s
 */
class AdminYear extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_year';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acad_year', 'acad_status'], 'required'],
            [['acad_year'], 'integer'],
            [['acad_status'], 'string'],
            [['acad_year'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'acad_year' => 'Acad Year',
            'acad_status' => 'Acad Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdminModule2s()
    {
        return $this->hasMany(AdminModule2::className(), ['mod_year' => 'id']);
        
        
    }
    
   
}
