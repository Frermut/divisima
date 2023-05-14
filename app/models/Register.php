<?php 
    namespace app\models;
    use app\core\Model;

    class Register extends Model {
        public function register($login, $password)
        {
            $stmt = $this->db->prepare("SELECT id FROM users WHERE login = :login");
            $stmt->execute([
                'login' => $login
            ]);

            if (!$stmt->fetch(\PDO::FETCH_OBJ)) {
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $this->db->prepare("INSERT INTO users SET login = :login, password = :password");
                $stmt->execute([
                    'login' => $login,
                    'password' => $password_hash
                ]);
                return true;
            } else {
                return false;
            }
          
        }
    }

?>