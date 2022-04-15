<?php
if(isset($_POST["add-to-cart"])){
    $imgName=$_POST["imageName"];
    $productname=$_POST["productName"];
    $productPrice=$_POST["price"];
    $userId=$_POST["userId"];
    $userMail=$_POST["email"];
    $productQuantity=$_POST["cart"];
    $productId=$_POST["product_id"];

  
include("config/function.php");
include("config/config.php");

insertIntoCartItem($connect,$productname,$userId,$userMail,$productQuantity,$productPrice,$productId,$imgName);

}