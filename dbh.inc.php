
<?php

$dsn ="mysql:dbname=latelur;host=localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO($dsn,$username,$password);
    echo "接続成功";
}   

catch(PDOExeption $e){
    echo "接続失敗:".$e -> getMessage();
}

?>