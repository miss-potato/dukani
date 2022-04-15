<?php
session_start();
include("../config/config.php");
include("../config/sessions.php")
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>S E L L</title>
</head>
<body>
<div class="backNav">
        <a id="back" href="../profile.php"> <- Back</a>
    </div>
<h1>SELL PRODUCTS</h1>


   <div class="container">
        <ul>
            <div class="list"><li><a href="addProduct.php">ADD PRODUCT</a></li></div>
            <div class="list"><li><a href="orders.php">ORDERS</a></li></div>
            <div class="list"><li><a href="addProduct.php">MANAGE PRODUCT</a></li></div>
            
        </ul>
   </div>

    
</body>
</html>