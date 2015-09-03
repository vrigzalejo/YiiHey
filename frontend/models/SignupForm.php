<?php
namespace frontend\models;

use backend\models\AuthAssignment;
use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $first_name;
    public $last_name;
    public $username;
    public $email;
    public $password;
    public $permissions;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['first_name', 'required', 'message' => 'have to fill this field'],
            ['last_name', 'required', 'message' => 'have to fill this field'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if($this->validate()) {
            $user             = new User();
            $user->first_name = $this->first_name;
            $user->last_name  = $this->last_name;
            $user->username   = $this->username;
            $user->email      = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->save();

            // add the permissions
            $permissionList = $_POST['SignupForm']['permissions'];

            foreach($permissionList as $value) {
                $newPemission             = new AuthAssignment();
                $newPemission->user_id    = $user->id;
                $newPemission->item_name  = $value;
                $newPemission->created_at = date('Y-m-d h:m:s');
                $newPemission->save();
            }

            return $user;

        }

        return null;
    }
}
