<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$email = $_POST["email"];
$new = $_POST["nw"];
$retype = $_POST["re"];

if ($new != $retype) {
    header("http://localhost/PhpAssignment2/forgotpw.php?msg=type same password");
} else {
    $mysqli = new mysqli("localhost", "root", "", "php", 3306);

    $result = $mysqli->query("UPDATE user SET PASSWORD = '$new' WHERE email = '$email'");
}
