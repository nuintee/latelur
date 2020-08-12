
<?php
require "header.php";
?>

<link rel="stylesheet" href="style.css" type="text/css">

<div class = "header-login">
    <?php
        if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method = "post">
            <button type = "submit" name = "logout-submit">Logout</button>
        </form>';
        }

        else{
            echo '<form action="includes/login.inc.php" method = "post">
            <input type="text" placeholder = "EMAIL" name = "mailuid" value ="">
            <input type="text" placeholder = "NAME" name = "nameuid" value ="">
            <input type="text" placeholder = "PASSWORD" name = "passworduid" value ="">
            <a href="#">Forgot password?</a>
            <a href="signup.php">Doesn'.'t have an account?</a>
            <button type= "submit" name = "login-submit">Login</button>
        </form>';
        }
    ?>

    
</div>

<main>
    <div class = "wrapper-main">
        <section class = "section-default">
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<p class = "login-status">You are logged in!</p>';
                }

                else{
                    echo '<p class = "login-status">You are logged out!</p>';
                }
            ?>
        </section>
    </div>
</main>

<?php
require "footer.php";
?>