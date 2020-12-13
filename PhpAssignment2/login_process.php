<?php

$username = $_POST["un"];
$password = $_POST["pw"];

$mysqli_connect = new mysqli("localhost", "root", "", "php", 3306);

$query = "SELECT name FROM user WHERE email='$username' AND PASSWORD='$password'";
$result = $mysqli_connect->query($query);

if ($row = $result->fetch_assoc()) {
    session_start([
        'cookie_lifetime' => -1
    ]);
    $_SESSION['name'] = $row['name'];
    header("location:http://localhost/PhpAssignment2/home.php?");
} else {
    header("location:http://localhost/PhpAssignment2/login.php?msg=invalid user details");
}