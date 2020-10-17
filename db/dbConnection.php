<?php

 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db   = 'tea';

//$host = 'localhost';
//$user = 'getanyth_engrave';
//$pass = 'getanyth_engrave';
//$db   = 'getanyth_engrave';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$connection= mysqli_connect($host,$user,$pass,$db) or die("error finding DB");

?>