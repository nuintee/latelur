<?php

if(isset($_POST['singup-button'])){

    require "dbh.inc.php";

    $email = $_POST['eMail'];
    $username = $_POST['userName'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    if(empty($email) || empty($username) || empty($password) || empty($passwordRepeat)){

        header("Location: ./index.php?error=failed");
        exit();
    }

    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: ./index.php?error=invalidmail&uid=".$username);
        exit();
    }

    elseif(!preg_match("")){
        header("Location: ./index.php?error=invalidmail&uid=".$username);
        exit();
    }

    else{
        if($conn==true){
            header("Location: ./index.php?signup=success");
            exit();
        }

    }

}   
else{
    header("Location: ./index.php?error=failed");
    exit();
}