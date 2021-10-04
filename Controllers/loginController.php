<?php
    require('../models/LoginModel.php');
    $email = filter_input(INPUT_POST,'email');
    $pass = filter_input(INPUT_POST,'password');
    $connect = new Login();
    $data = $connect -> postlogin($email,$pass);
    if($data != null){
        // header('Location: ../homepage.php');
        include('../homepage.php');
    }else{
        header('Location: ../error.php');
    }

    
?>