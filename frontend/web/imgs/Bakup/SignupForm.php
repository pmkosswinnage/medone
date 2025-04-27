<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $user_id;
    public $username;
    public $email;
    public $password;
    Public $ConfirmPassword;
    Public $first_name;
    Public $last_name;
    Public $role;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['user_id', 'filter', 'filter' => 'trim'],
            ['user_id', 'required'],
            ['user_id', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This UserID has already been taken.'],
            ['user_id', 'string', 'min' => 8, 'max' => 8],
            
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            
            ['ConfirmPassword', 'required'],
            ['ConfirmPassword', 'string', 'min' => 6],
            ['ConfirmPassword', 'compare', 'compareAttribute'=>'password'], 
            
            ['first_name', 'required'],
            ['first_name', 'string', 'min' => 2, 'max' => 250],
            
            ['last_name', 'required'],
            ['last_name', 'string', 'min' => 2, 'max' => 250],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->user_id=$this->user_id;
            $user->first_name=$this->first_name;
            $user->last_name=$this->last_name;
            $user->role=$this->role;
            $user->register_date=date("Y/m/d");
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
