<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$mysqli = new mysqli("localhost", "root", "", "php", 3306);

$search = "SELECT email FROM user WHERE email='".$email."'";

$result = $mysqli->query($search);

if ($row = $result->fetch_assoc()) {
    header("location:http://localhost/PhpAssignment2/Signup.php?msg=already a member");
}else{
    $mysqli->query("INSERT INTO user(NAME,email,PASSWORD) VALUES('".$name."','".$email."','".$password."')");
    header("location:http://localhost/PhpAssignment2/login.php");
}


