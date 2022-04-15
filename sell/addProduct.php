<?php
session_start();
include("../config/config.php");
include("../config/function.php");

if(isset($_POST['addProductDetails'])) {
    $productName = $_POST['productName'];
    $productDesc = $_POST['productDescription'];
    $productPrice = $_POST['price'];
if (emptyfields($productName, $productDesc, $productPrice) !== false) {
        header("location:addProduct.php.php?error=emptyinputs");
        exit();
    }

    function addProduct($connect, $productName, $productDesc, $productPrice){
        $sql = "INSERT INTO product(name, description, price) VALUES(?, ?, ?);";
    $stmt = mysqli_stmt_init($connect);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:addProduct.php?Something went wrong");
        exit();

    } else {
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:../shop.php");
        exit();
    }
    
    }

    

    addProduct($connect, $productName, $productDesc, $productPrice);

} 

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addProduct.css">
    <title>S E L L</title>
</head>
<body>
    <div class="backNav">
        <a id="back" href="admin.php"> <- Back</a>
    </div>
    <div>
        <h3>ADD PRODUCT</h3>
    </div>


<div class="container">
<form action="product.php" method="post">
    <div class="inputContainer">
         <input type="text" name="productName" id="productName" placeholder="Enter name of the product">
    </div>
    <div>
        <textarea name="productDescription" ea id="desc" cols="30" rows="10" placeholder="Enter Product Description"></textarea>
    </div>
    <div class="inputContainer">
        <input type="number" name="price" id="price" placeholder="Enter Product Price">
    </div>

    <input type="submit" name="addProductDetails" value="Add Product" id="addProduct">
    
    
</form>
</div>
<div></div>

</body>
</html>