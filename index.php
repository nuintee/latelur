
<?php
    require 'header.php';
?>

<?php

?>

<main>
    <div class = "sign-container">
        <form class = "sign-wrapper" action="signup.inc.php" method = "post">
            <input class = "input-box" type="text" placeholder="EMAIL" name = "eMail">
            <input class = "input-box" type="text" placeholder="USERNAME" name = "userName">
            <input class = "input-box" type="password" placeholder="PASSWORD" name = "password">
            <input class = "input-box" type="password" placeholder="REPEAT PASSWORD" name = "passwordRepeat">
            <div class = "support-nav">
                <a href="login.php" name = "login-button" method = "post">Already have an account?</a>
            </div>
            <button class = "action-button" type = "submit" name = "singup-button">Signup</button>
        </form>
    </div>
</main>

<style>

    
</style>