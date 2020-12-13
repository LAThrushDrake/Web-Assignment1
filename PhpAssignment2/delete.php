<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_GET['id'];

echo $id;

$mysqli = new mysqli("localhost", "root", "", "php", 3306);

if ($mysqli->query("DELETE FROM schedule WHERE id = '" . $id . "'") === TRUE) {
    echo 'updated';
} else {
    echo $mysqli->error;
}
