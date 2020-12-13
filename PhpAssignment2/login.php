<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign in</title>
        <link type="text/css" rel="stylesheet" href="css/osec.css"/>
    </head>

    <?php
    session_start();
    if (isset($_SESSION['name'])) {
        header("location:http://localhost/PhpAssignment2/home.php");
    }
    
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
    }
    ?>

    <body class="signin_page">
        <div class="login_form">

            <h2>Login</h2><br/><br/>
            <form action="login_process.php" method="POST">
                <input class="text" type="text" name="un" placeholder="Email"/><br/><br/>
                <input class="text" type="password" name="pw" placeholder="PassWord">
                <br/><br/><br/>
                <input type="submit" value="LogIn"/>
            </form>
            <br/>
            <?php if (isset($msg)) { ?>
                <span><?php echo $msg; ?></span>
            <?php } ?>
            <br/><br/>
            <div>
                <a href="forgotpw.php">Forgot password?</a>
            </div>
            <br/>
            <br/>
            <span>don't have a account?</span><a href="Signup.php">Sign UP</a>
        </div>
    </body>
</html>