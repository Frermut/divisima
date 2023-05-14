<?php 
    namespace app\core;
    session_start();
    // use app\core\View;

    abstract class Controller {
        protected $route;
        protected $view;
        protected $model;
        protected $user_id; 
        protected $count = 0;

        public function __construct($route) {
            $this->user_id = $_SESSION['auth_user'];
            if ($_GET['action'] == 'logout') {
                unset($_SESSION['auth_user']);
                // header("Location: " . $_SERVER['HTTP_REFERER']); // редирект на ласт страницу на которой находился пользователь
                header("Location: /sign-in");
            }
          
            $this->route = $route;
            $model_name = '\app\models\\' . ucfirst($route['controller']);
            
            if (class_exists($model_name)) {
                $this->model = new $model_name;
            }            

            $this->view = new View($route);

            if ($this->user_id) {
                $qtys = $this->model->getQtys($this->user_id);
                $this->count = array_reduce($qtys, function($sum, $item) {
                    return $sum+=$item->qty;
                },0);
            } else {
                $this->count = null;
            }

           
        }

        public function isFetch()
        {
            return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
        }

     
    }
?>