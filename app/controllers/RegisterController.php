<?php 
namespace app\controllers;
use app\core\Controller;

class RegisterController extends Controller {
    public function indexAction()
    {
        if($_SESSION["auth_user"]) {
            header("Location: /");
            die();
        }
        if ($_POST) {
            if ($_POST['login'] && $_POST['password'] && $_POST['confirm-password']) {
                $login = $_POST['login'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm-password'];
            
                if ($password != $confirm_password) {
                    $_SESSION['reg_error'] = 'Please make sure your passwords match!';
                } else {
                    $isRegister = $this->model->register($login, $password);
                    if ($isRegister) {
                        header("Location: sign-in");
                        die;
                    } else {
                        $_SESSION['reg_error'] = 'Login is already exists!';
                    }
                }
            }
        }
        
        $this->view->render(null);
    }

}

?>