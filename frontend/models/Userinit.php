<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "userinit".
 *
 * @property integer $id
 * @property string $suser_id
 * @property integer $srole
 */
class Userinit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    private $_useridreturn;
    
    public static function tableName()
    {
        return 'userinit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'srole'], 'integer'],
            ['suser_id', 'filter', 'filter' => 'trim'],
            [['suser_id', 'srole'], 'required','message' => 'User ID Cannot be blank'],
            [['suser_id'], 'string', 'min' => 8, 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'suser_id' => 'User ID',
            'srole' => 'System Role',
        ];
    }
    
        public function searchbyID($params1)
    {
         return static::findOne(['suser_id' => $params1]);
    }
    
    
    
//        protected function getUser()
//    {
//        if ($this->_user === null) {
//            $this->_user = User::findByUsername($this->email);
//        }
//
//        return $this->_user;
//    }
    
    

    
}
