<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>forgot password</title>
        <link type="text/css" rel="stylesheet" href="css/osec.css"/>
    </head>

    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
    } 
    ?>

    <body class="signin_page">
        <div class="login_form">

            <h2>Login</h2><br/><br/>
            <form action="logc" method="POST">
                <input class="text" type="text" name="email" placeholder="email"/><br/><br/>
                <input class="text" type="password" name="nw" placeholder="new Password"/><br/><br/>
                <input class="text" type="password" name="re" placeholder="Retype Password">
                <br/><br/><br/>
                <input type="submit" value="Reset Password"/>
            </form>
            <br/>
            <?php if (isset($msg)) {?>
            <span><?php echo $msg; ?></span>
            <?php } ?>
            <br/>

            <br/><br/><br/>
            <a href="login.php">Sign in insted</a>
        </div>
    </body>
</html>
