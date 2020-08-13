
<?php

/* dev
$dsn ="mysql:dbname=latelur;host=localhost";
$username = "root";
$password = "";
*/

$dsn = "mysql:dbname=heroku_2f8e4059c2be9d3;host=us-cdbr-east-02.cleardb.com";
$username = "b8875702473307";
$password = "47bb3b33";

try{
    $conn = new PDO($dsn,$username,$password);
    echo "接続成功";
}   

catch(PDOExeption $e){
    echo "接続失敗:".$e -> getMessage();
}

?>