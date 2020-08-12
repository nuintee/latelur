
<?php
    require 'header.php';
?>

<main>
    <div class = "signup-container">
        <form class = "signup-wrapper" action="signup.inc.php" method = "post">
            <input class = "input-box" type="text" placeholder="EMAIL" name = "eMail">
            <input class = "input-box" type="text" placeholder="USERNAME" name = "userName">
            <input class = "input-box" type="password" placeholder="PASSWORD" name = "password">
            <input class = "input-box" type="password" placeholder="REPEAT PASSWORD" name = "passwordRepeat">
            <a href="login.inc.php"><p>Already have an account?</p></a>
            <button class = "action-button" type = "submit" name = "singup-button">Signup</button>
        </form>
    </div>
</main>

<style>

    :root{
        --font-size:13px;
        --gradient-purple:linear-gradient(to right bottom, #BD20FF , #2B1780);
    }

    html{
        touch-action: manipulation
    }

    body{
        margin:0;
        background-color:#333;
        box-sizing:border-box;
    }

    a{
        text-decoration:none;
        color:#AFAFAF;
        margin:8px;
    }a:hover{
        color:#FFF;
    }

    .signup-container{
        box-sizing:border-box;
        width:100%;
        height:80vh;
        padding:16px;
        margin:0;
        text-align:center;
        font-family: 'Raleway', sans-serif;
    }


    .signup-wrapper{
        height:100%;
        box-sizing:border-box;
    }

    input::placeholder{
        font-size: var(--font-size);
    }

    .action-button{
        display:block;
        box-sizing:border-box;
        width:100%;
        background:var(--gradient-purple);
        font-family: 'Raleway', sans-serif;
        font-weight:bold;
        color:#FFF;
        padding:24px;
        font-size:16px;
        outline:none;
        border:none;
        border-radius:50px;
        cursor:pointer;
    }


    .input-box{
        display:block;
        box-sizing:border-box;
        width:100%;
        background-color:#414141;
        padding:16px;
        margin:8px 0px;
        outline:none;
        border:none;
        font-family: 'Raleway', sans-serif;
        font-size:var(--font-size);
        color:#FFF;
    }
</style>