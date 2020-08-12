
<?php

$dsn ="mysql:dbname=heroku_2f8e4059c2be9d3;host=us-cdbr-east-0";
$username = "b88757024733";
$password = "47bb3b33";

try{
    $dbh = new PDO($dsn,$username,$password);
    echo "接続成功";
    header("Location: signup.inc.php?signup=success");
    exit();
}   

catch(PDOExeption $e){
    echo "接続失敗:".$e -> getMessage();
    header("Location: signup.inc.php?error=signupfail");
    exit();
}

?>