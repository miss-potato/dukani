<?php

if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    include 'config/config.php';

    $sql = "SELECT * FROM product ORDER BY id DESC";
    $stmt = mysqli_stmt_init($connect);

    if(!mysqli_stmt_prepare($stmt, $connect)) {
        echo "Oops Something went wrong";
    } else {
        $param_id = trim($_GET['id']);
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        if(mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                $productName = $row['name'];
                $productDesc = $row['description'];
                $productPrice = $row['price'];
                $productQuantity = $row['quantity'];
            } else {
                header("location:error.php");
                exit();
            }
        } mysqli_stmt_close($stmt);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View  Product</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>

.wrapper{
width: 600px; margin: 0 auto;
} </style>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<h1 class="mt-5 mb-3">View Product</h1>
<div class="form-group">
<label>Product Name</label>

<p><b><?php echo $row['name']; ?></b></p>
</div>
<div class="form-group">
<label>Product Description</label>
<p><b><?php echo $row['description']; ?></b></p>
</div>
<div class="form-group">
<label>Product Price</label>
<p><b><?php echo $row['price']; ?></b></p>
</div>
<div class="form-group">
<label>Product Quantity</label>
<p><b><?php echo $row['quantity']; ?></b></p>
</div>
<p><a href="landing.php" class="btn btn-primary">Back</a></p>
</div>
</div>

</div>
</div>
</body>
</html>