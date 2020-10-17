<?php
include '../db/dbConnection.php';
$id=$_GET['id'];
$sql2 = mysqli_query($connection,"UPDATE user_order SET status = 1   WHERE order_id = $id");
header("location: list-order.php");
?>