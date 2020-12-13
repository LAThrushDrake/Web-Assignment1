<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_GET['id'];
$type = $_GET['type'];
$sun = $_GET['sun'];
$mon = $_GET['mon'];
$tue = $_GET['tue'];
$wed = $_GET['wed'];
$thur = $_GET['thur'];
$fri = $_GET['fri'];
$sat = $_GET['sat'];

echo $id;
echo $type;
echo $sun;
echo $mon;
echo $tue;
echo $wed;
echo $thur;
echo $fri;
echo $sat;

$mysqli = new mysqli("localhost", "root", "", "php", 3306);

if ($mysqli->query("UPDATE schedule SET Type = '".$type."',Sunday = '".$sun."',Monday = '".$mon."',Tuesday = '".$tue."',Wednesday = '".$wed."',Thursday = '".$thur."',Friday = '".$fri."',Saturday = '".$sat."' WHERE id = '$id'")===TRUE) {
    echo 'updated';
}
echo $mysqli->error;