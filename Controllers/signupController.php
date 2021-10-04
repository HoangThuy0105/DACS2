<?php
    require '../models/signup.php';

    $email = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');
    $retypepassword = filter_input(INPUT_POST,'retypepassword');
    $connect = new Signup();
    if($email && $password != NULL){
        $connect -> signupabc($email,$password);
    }else{
        echo "error";
    }
?>