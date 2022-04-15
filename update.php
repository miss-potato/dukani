<?php

include ('config/config.php');

$id = $_REQUEST['id'];

$sql = "SELECT * FROM product WHERE id='".$id."'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Update Product</title>
    <style>
        .form {
            width: 60%;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="form">
        <h1>Update Product</h1>
        <?php
            $status = "";
            if(isset($_POST['new']) && $_POST['new']== 1) {
                $id = $_REQUEST['id'];
                $productName = $_POST['productName'];
                $productDesc = $_POST['productDescription'];
                $productPrice = $_POST['price'];
                $productQuantity = $_POST['quantity'];
                $productCategory = $_POST['category'];
                $productTag = $_POST['tags'];


                $update =  "UPDATE product SET name='".$productName."', description='".$productDesc."', price='".$productPrice."', quantity='".$productQuantity."', category_id='".$productCategory."', tag_id='".$productTag."' WHERE id='".$id."' ";
                mysqli_query($connect, $update);
                header("location:landing.php");
            } 
        ?>
        <div>
            <form method="post" action="">
                <input type="hidden" name="new" value="1"> 
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
<label>Product Name</label>
<input type="text" name="productName" class="form-control" value="<?php echo $row['name']; ?>">
</div>

<div class="form-group">
<label>Product Description</label>
<textarea name="productDescription" class="form-control" value="<?php echo $row['description']; ?>"></textarea>
</div>

<div class="form-group">
<label>Product Price</label>
<input type="text" name="price" class="form-control" value="<?php echo $row['price']; ?>"> 
</div>

<div class="form-group">
<label>Quantity</label>
<input type="number" name="quantity" class="form-control" value="<?php echo $row['quantity']; ?>">
</div>

<div class="form-group">
<label for="CATEGORY-DROPDOWN">Category</label>
<select class="form-control" id="category-dropdown" name="category">
<option value="">Select Category</option>
<?php
require_once "config/config.php";
$query = mysqli_query($connect,"SELECT * FROM product_category ORDER BY id DESC");
while($row = mysqli_fetch_array($query)) {
?>
<option value="<?php echo $row['id'];?>"><?php echo $row["category_name"];?></option>
<?php
}
?>
</select>
</div>

<div class="form-group">
<label for="CATEGORY-DROPDOWN">Featured</label>
<select class="form-control" id="category-dropdown" name="tags">
<option value="">Tags</option>
<?php
require_once "config/config.php";
$query = mysqli_query($connect,"SELECT * FROM tags ORDER BY id DESC");
while($row = mysqli_fetch_array($query)) {
?>
<option value="<?php echo $row['id'];?>"><?php echo $row["tag_name"];?></option>
<?php
}
?>
</select>
</div>

<input type="submit" name="submit" class="btn btn-warning" value="Update Product"> <a href="landing.php" class="btn btn-secondary ml-2">Cancel</a>
            </form>
        </div>
    </div>
</body>
</html>
