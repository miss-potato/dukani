<?php

$lhost = "localhost";
$dbuser = "root";
$dbpass = "fairies";
$dbname = "dukani";

$connect = mysqli_connect($lhost, $dbuser, $dbpass, $dbname);
if(!$connect){
    die("connection failed ".mysqli_connect_error());
}
?>