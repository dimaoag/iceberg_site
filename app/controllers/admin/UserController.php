<?php

namespace app\controllers\admin;

use app\models\User;

class UserController extends AdminController {


    public function loginAdminAction(){
        $this->layout = 'login_admin';
        if (!empty($_POST)){
            $user = new User();
            if ($user->login()){
                $_SESSION['success'] = 'Success!';
            } else {
                $_SESSION['errors'] = 'Error! Телефон или пароль неверны.';
            }
            if (User::isAdmin()){
                redirect(ADMIN);
            } else {
                redirect();
            }
        }
    }

    public function logoutAction(){
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        if (isset($_SESSION['user_id'])) {
            unset($_SESSION['user_id']);
        }
        if (isset($_SESSION['errors']) || $_SESSION['success']) {
            unset($_SESSION['errors']);
            unset($_SESSION['success']);
        }
        redirect(ADMIN);
    }

}