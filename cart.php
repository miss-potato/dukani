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
    <title>C A R T</title>
    <style>
        body {
            background-color: rgb(250, 224, 199);
        }
        .cart-container {
            width: 60%;
            margin: auto;
            background-color: white;
            border-radius: 20px;
            margin-top: 70px;
            margin-bottom: 50px;
            padding: 50px;
        }
        h3 {
            font-family: 'Jost',sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        td,th {
            border: 1px solid black;
            text-align: left;
            padding: 10px;
        }
        a {
            text-decoration: none;
            font-family: sans-serif;
        }

        .checkout {
            font-family: sans-serif;
            padding: 10px;
            border: none;
            background-color: rgb(250, 224, 199);
        }
        .update {
            font-family: sans-serif;
            padding: 10px;
            border: none;
            background-color: rgb(250, 224, 199);
        }
    </style>
</head>
<body>

<div class="cart-container">
    <a href="shop.php">Back</a>
    <h3>SHOPPING CART</h3>
    
    
<table>
    <tr>
  <th>Product name</th>
  <th>userId</th>
  <th>Product Id</th>
  <th>Quantity</th>
  <th>Product image</th>
  <th></th>
</tr>



  <?php
    require_once("config/config.php");
    $name=$_SESSION["mail"];
    $sql = "SELECT * FROM cart_items WHERE email_address='$name' ORDER BY id DESC";
    $result = mysqli_query($connect, $sql);
    while($value = mysqli_fetch_array($result)){
        $id=$value["id"];
        $userId=$value["userId"];
        $productId=$value["product_id"];
        $quantity=$value["quantity"];   
        $imagepic=$value["imageName"];
        $productprice=$value["productprice"];
        $productName=$value["productName"];
?>
<tr>
<form action="handlers/cartHandler.php" method="post">
  <input type="text" name="id" hidden value="<?php echo $id;?>">
<td><?php echo $productName; ?></td>
<td><?php echo $userId;?></td>
<td><?php echo $productId; ?></td>
<td><input type="number" value="<?php echo $quantity; ?>" name="quantity"></td>
<td><img src="images/<?php echo  $imagepic;?>" width="200px" height="200px"></td>
<td><input class="update" type="submit" value="update" name="submit"></td>
</form>
</tr>
z
<?php 
}?>


</table>
<a href="checkout.php"><input class="checkout" type="submit" value="Checkout"></a>
</div>
 
    
</body>
</html>
