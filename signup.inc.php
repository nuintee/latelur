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
        header("Location: ./index.php?error=invalidmail&userName=".$username);
        exit();
    }

    elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ./index.php?error=invaliduid&eMail=".$email);
        exit();
    }

    elseif($password !== $passwordRepeat){
        header("Location: ./index.php?error=passwordCheck&eMail=".$email."&userName=".$username);
        exit();
    }

    else{

            $sql = "SELECT * FROM `users` WHERE uidUsers = :uid OR emailUsers = :eMail";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":uid",$username);
            $stmt->bindValue(":eMail",$email);
            $stmt->execute();

            $result = $stmt->fetch();

            #echo $result;
            
            if($result > 0){
                header("Location: ./index.php?error=alredyexists&count=".$result);
                exit();
            }

            else{

                $sql = "INSERT INTO users (uidUsers,emailUsers,pwdUsers) VALUES(:uid,:eMail,:password)";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":uid",$username);
                $stmt->bindValue(":eMail",$email);
                $stmt->bindValue(":password",password_hash($password,PASSWORD_DEFAULT));
                $stmt->execute();
    
                header("Location: ./login.php?signup=success");
                exit();

                }

        } 

}

else{
    header("Location: ./index.php?error=failed");
    exit();
}