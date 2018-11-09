<?php
namespace app\models;


class User extends AppModel {


    public $attributes = [
        'username' => '',
        'password' => '',
    ];


    public $rules = [
        'required' => [
            ['username'],
            ['password'],
        ],
    ];



    public function hashPassword(){
        $this->attributes['password'] = base64_encode($this->attributes['password']);
//        $this->attributes['password'] = password_hash($this->attributes['password'], PASSWORD_DEFAULT);
    }




    public function login(){
        $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
        $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
        $username = htmlspecialchars($username);
        $password = htmlspecialchars($password);
        if ($username && $password){
            $user = \R::findOne('user', "username = ? AND role = 'admin'", [$username]);
            if ($user){
                if (base64_encode($password) == $user->password){
                    foreach ($user as $key => $value){
                        if ($key != 'password'){
                            $_SESSION['user'][$key] = $value;
                        }
                    }
                    return true;
                }
            }
        }
        return false;
    }
    
    /**
     * @return bool
     */
    public static function isAuth(){
        return isset($_SESSION['user']) ? true : false;
    }


    /**
     * @return bool
     */
    public static function isAdmin(){
        if (isset($_SESSION['user']) && ($_SESSION['user']['role'] == 'admin')){
            return true;
        }
        return false;
    }

}