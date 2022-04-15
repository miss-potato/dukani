<?php
 session_start();
 


 if (isset($_POST["login"])) {
    $user =$_POST["username"];
    $pass =$_POST["password"];

    include("./config/function.php");
    include("./config/config.php");


    if(emptylogin($user, $pass) !== false) {
        header("location:login.php?error=emptyinputs");
        exit();
    }
     loginUser($connect, $user, $pass);
    
 }

?>
