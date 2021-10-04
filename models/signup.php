<?php
    require 'connection.php';
    
    class Signup{
        private $connect;
        function __construct() {
            $this->connect = new connection();
        }
        public function signupabc(&$email, &$password){
            try{
                $query = "INSERT INTO account (Email, Password) VALUES (:email, :password)";
                $statement = $this->connect->get_con()->prepare($query);
                $statement -> bindValue(':email', $email);
                $statement -> bindValue(':password', $password);
                $statement -> execute();
                $statement -> closeCursor();
            }catch(PDOException $e) {
                echo "Error:" . $e->getMessage();
            }
        }
    }
?>