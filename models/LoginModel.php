<?php 
    require "connection.php";
    class Login {
        private $connect;
        private $login;

        function __construct() {
            $this->connect = new connection();   
        }
        public function postlogin(&$email, &$password) {
            try{
                $query = "SELECT * FROM account WHERE Email = :email and Password = :password";
                $statement = $this->connect->get_con()->prepare($query);
                $statement -> bindValue(':email', $email);
                $statement -> bindValue(':password', $password);
                $statement->execute();
                $this->login = $statement->fetchAll();
                $statement->closeCursor();
            }catch(PDOException $e) {
                echo "Error:" . $e->getMessage();
            }
            return $this->login;
        }
    }
?>
