
<?php
    require "header.php";
?>

<div class = "sign-container">
    <form  class = "sign-wrapper" action="login.inc.php" method = "post">
    <input class = "input-box" type="text" placeholder="EMAIL/USERNAME" name = "eMailOrUidMember">
    <input class = "input-box" type="password" placeholder="PASSWORD" name = "passwordMember">
    <div class = "support-nav">
        <a href="login.php" >Forgot Password?</a>
        <a href="index.php" >Doesn't have an account?</a>
    </div>
    <button class = "action-button" type = "submit" name = "signin-submit">Login</button>
    </form>
</div>