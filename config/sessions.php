<?php

$isLoggedIn = false;
if (isset($_COOKIE['name'])) {
    $_SESSION['name'] = $_COOKIE['name'];
}
if(isset($_SESSION["name"])){
    $user = $_SESSION['name'];
    $isLoggedIn = true;
}else{
    header("location:login.php?error=notlogedin");
    exit();
}



?>