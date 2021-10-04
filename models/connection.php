<?php 
    class connection{
        private $conn;

        // function __construct(){
        //     try {
        //         $this->conn = new PDO('mysql:host=localhost; dbname=farm', 'root', '');
        //         // mysqli_set_charset($conn, 'UTF8');
        //     } catch(PDOException $e) {
        //         $error_message = $e->getMessage();
        //         echo "<p>An error occurred while connecting to
        //         the database: $error_message </p>";
        //     }
        // }
        //     public function get_con(){
        //         return $this->conn;
        //     }


        function __construct(){
            try {
                $this->conn = new PDO('mysql:host=localhost;dbname=farm', 'root', '');
            } catch(PDOException $e) {
                $error_message = $e->getMessage();
                echo "<p>An error occurred while connecting to the database: $error_message </p>";
            }
        }

        public function get_con(){
            return $this->conn;
        }

        }
        
?>