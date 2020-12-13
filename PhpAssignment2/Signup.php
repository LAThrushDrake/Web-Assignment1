<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
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
    
    <body class="signup_page">
        <div class="signup_form">
            <h2>Sign UP</h2>
            <form action="signin_process.php" method="POST">
                <input class="text" type="text" name="name" placeholder="Name"/><br/><br/>
                <input class="text" type="text" name="email" placeholder="email"><br/><br/>
                <input class="text" type="password" name="password" placeholder="PassWord"><br/><br/><br/>
                <input type="submit" value="SignUP"/>
            </form>
            <br/>
            <?php if (isset($msg)) {?>
            <span><?php echo $msg; ?></span>
            <?php } ?>
            <br/>
            <br/>
            <span>Already have a account?</span><a href="login.php">Sign in</a>
        </div>
    </body>
</html>

