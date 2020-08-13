
<?php

if(isset($_POST['signin-submit'])){
    
    require "dbh.inc.php";

    $emailOrUid = $_POST['eMailOrUidMember'];
    $password = $_POST['passwordMember'];

    /*
    $sql = "SELECT * FROM users WHERE uidUsers = :uid AND pwdUsers = :pwd OR emailUsers = :email AND pwdUsers = :pwd";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":uid",$emailOrUid);
    $stmt->bindValue(":email",$emailOrUid);
    $stmt->bindValue(":pwd",$password);
    $stmt->execute();

    $result = $stmt->fetch();


    if(password_verify($password,$result['pwdUsers'])){

        echo "Welcome";
    }

    else{
        echo "failed!!!";
    }
    */

    $sql = "SELECT * FROM users WHERE uidUsers = :uid OR emailUsers =:email";
    $stmt = $conn->prepare($sql);

    if(!$stmt){
        echo "statement false";
    }

    else{
        $stmt->bindValue(":uid",$emailOrUid);
        $stmt->bindValue(":email",$emailOrUid);
        $stmt->execute();

        $result = $stmt->fetch();

        if(password_verify($password,$result['pwdUsers'])){
            echo "Welcome";
        }

        else{
            echo "Failed";
        }
    }



    
}


else{
    echo "failed";
}



?>