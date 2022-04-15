<?php
include("./config/config.php");
session_start();
if(isset($_SESSION["name"])){

}else{
    header("location:login.php?error=notlogedin");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C H E C K O U T</title>
    <style>
        body {
            background-color: rgb(250, 224, 199);
            text-align: center;
            font-family: sans-serif;
        }
        .checkout-container {
            width: 60%;
            margin: auto;
            background-color: white;
            border-radius: 20px;
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 50px;
        }
        button {
            font-family: sans-serif;
            padding: 10px;
            border: none;
            background-color: rgb(250, 224, 199);
        }
        
    </style>
</head>
<body>
    <div class="checkout-container">
        <h3>You have successfully checked out</h3>
        <p>Thank you for trusting us. Welcome Back soon</p>
        <p>To keep on shopping with us go back to the home page</p>
        <a href="cart.html"><button>Back to Home</button></a>
    </div>
</body>
</html>