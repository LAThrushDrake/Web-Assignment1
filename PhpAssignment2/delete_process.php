<?php


session_start();

$mysqli_connect = new mysqli("localhost", "root", "", "php", 3306);

$query = "DELETE FROM user WHERE NAME = '" .$_SESSION['name']. "'";

$result = $mysqli_connect->query($query);

session_unset();
session_destroy();

header("location:http://localhost/PhpAssignment2/login.php");
