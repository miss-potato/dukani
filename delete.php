<?php

include ('config/config.php');

$id = $_REQUEST['id'];
$sql = "DELETE FROM product WHERE id=$id";
$result = mysqli_query($connect, $sql);
header("location:landing.php")
?>