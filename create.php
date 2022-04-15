
<?php


if(isset($_POST['submit']) && isset($_FILES['my_image'])) {

    // Include config file

    include 'config/config.php';
    include 'config/function.php';

    

    $productName = $_POST['productName'];
    $productDesc = $_POST['productDescription'];
    $productPrice = $_POST['price'];
    $productQuantity = $_POST['quantity'];
	$productCategory = $_POST['category'];

    echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];


    if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: create.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'images/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO product(name, description, price, quantity,image_url, category_id) 
				        VALUES('$productName','$productDesc','$productPrice','$productQuantity','$new_img_name', '$productCategory')";
				mysqli_query($connect, $sql);
				header("Location: landing.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: create.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: create.php?error=$em");
    }
	if(emptyfields($productName, $productDesc, $productPrice)!== false) {
        header("location:create.php?error=emptyinputs");
        exit();
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Product</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.wrapper{
width: 600px; margin: 0 auto; padding-bottom: 2rem;
} </style>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<h2 class="mt-5">Create Product</h2>
<p>Please fill this form and submit to add products.</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
<div class="form-group">
<label>Product Name</label>
<input type="text" name="productName" class="form-control">
</div>

<div class="form-group">
<label>Product Description</label>
<textarea name="productDescription" class="form-control"></textarea>
</div>

<div class="form-group">
<label>Product Price</label>
<input type="text" name="price" class="form-control"> 
</div>

<div class="form-group">
<label>Quantity</label>
<input type="number" name="quantity" class="form-control" >
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
<label>Add Image</label>
<input type="file" name="my_image" class="form-control">
</div>    
<input type="submit" name="submit" class="btn btn-warning" value="Add Product"> <a href="landing.php" class="btn btn-secondary ml-2">Cancel</a>
</form>
</div>
</div>
</div>
</div>
</body>
</html>