<?php 
namespace app\controllers;
use app\core\Controller;

class LoginController extends Controller {
    public function indexAction()
    {
        //если пользователь вошёл, то запретить доступ к странице входа
        if($_SESSION["auth_user"]) {
            header("Location: /");
            die();
        }

        if ($_POST) {
            if ($_POST['login'] && $_POST['password']) {
                $login = $_POST['login'];
                $password = $_POST['password'];
                // var_dump($login);
                // var_dump($password);
                // var_dump(password_hash($password, PASSWORD_DEFAULT));
                $isUser = $this->model->auth($login, $password);
                if ($isUser) {
                    if(password_verify($password, $isUser->password)) {
                        //авторизация
                        $_SESSION['auth_user'] = $isUser->id;
                        header("Location: /");
                        die();
                    } else {
                        //ошибка, юзер не найден
                        $_SESSION['auth_error'] = 'Password Is Not Correct!';
                    }
                } else {
                    $_SESSION['auth_error'] = 'This User Is Not Found!';
                }

            }
        }

        $this->view->render(123);
        
    }

}
#1:46:01
?>