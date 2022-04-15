

<?php
session_start();
include "config/config.php";
if(isset($_SESSION["name"])){

}else{
	header("location:login.php?error=notlogedin");
	exit();
}
$status="";
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
	$sql="SELECT * FROM product WHERE id = '$productId'";
    $getProductData = mysqli_query($connect, $sql );
    $row = mysqli_fetch_assoc($getProductData);
	$productUid=$row["id"];
	$productName= $row['name'];
    $productDesc = $row['description'];
    $productPrice = $row['price'];
	$productImage = $row['image_url'];
	$productQuantity = $row['quantity'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>S H O P</title>
</head>
<style>
	a {
		text-decoration: none;
		color: #000;
	}
    .products {
        margin-top: 126px;
    }
    .img {
        width: 12rem;
        height: 14rem;
    }

    .products-wrapper {
    display: flex;
    justify-content: center;
    width: 80%;
    margin: auto;
    }
	
	.button {
	margin-right: 0.5rem;
	background-color: #FFF;
	color: #000;
    padding: .7em;
    font-size: 1rem;
    font-family: 'Jost', sans-serif;
    letter-spacing: .2rem;
    box-shadow: 2px 2px #000;
    outline: none;
	}

	.buy-button {
		background-color: rgb(250, 224, 199);
	}
	.wishlist:hover {
		background-color: rgb(250, 224, 199);
	}

	.buy-button:hover {
		background-color: white;
	}

	.column {
		padding: 1rem;
	}

	.drift-demo-trigger {
		width: 300px;
		height: 350;
	}

	#cart {
		margin-bottom: 0.5rem;
		padding: 0.8rem;
		border: none;
		background-color: rgb(250, 224, 199);
		border-radius: 10px;
	}

	.price {
		color: #eb8b32;
	}

</style>
<body>

<div class="sidebar-modal-content">
        <ul>
            <li class="clickable"><i class='bx bx-x'></i></li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.html">About</a></li>
        </ul>

        <a href="profile.php">My Account</a>
    </div>
    <div class="container">

        <div class="promotion-bar">Enjoy 30% OFF SITEWIDE on our Back to School Sale! <strong>Use code: BPKTL</strong></div>
        <div class="navbar">
            <div class="burger clickable">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="header">DUKANI</div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                </ul>
            </nav>
            <div class="account">
                <a href="profile.php"><i class='bx bx-user'></i></a>   
                <i class='bx bx-shopping-bag'></i>
            </div>
        </div>

    <div class="products">
        <div class="products-wrapper">
			<?php 
          $sql = "SELECT * FROM product WHERE id='$productId';";
          $result = mysqli_query($connect, $sql);

          if (mysqli_num_rows($result) > 0) {
          	while ($row = mysqli_fetch_assoc($result)) {  ?>

		<div class="jeans-wrapper">

  			<div class="column">
      			<div class="thumbnail-container">
        			<img class="drift-demo-trigger" data-zoom="images/<?=$row['image_url']?>" src="images/<?=$row['image_url']?>">
      			</div>
  			</div>

  			<div class="column">
    			<div class="details">
      				<h1><?php echo $productName; ?></h1>
      				
      				<p class="description"><?php echo $productDesc ?></p>
					  <p class="price">TZS <?php  echo $productPrice; ?></p>
					  <?php 
					  if($productQuantity<1){
						  echo"<p>Out of Stock</p>";
					  } 
					  else{
						  
						  ?>
					  <p>Stock Available: <?php echo$productQuantity; ?></p> 
					  <?php } 
					  ?>
	  				<div class="columns">

	  						<?php } }?>

						<div class="column" id="wishlist-container">

						<form action="viewhandler.php" method="post">
							<div class="form-item">
								
							<input type="text" hidden name="imageName" value="<?php echo $productImage; ?>">
							<input type="text" hidden name="productName" value="<?php echo $productName; ?>">
							<input type="text" name="price" value="<?php  echo $productPrice; ?>" hidden>
							<input type="text" name="userId" value="<?php echo $_SESSION["user_id"];?>" hidden>
     						<input type="text" name="email" value="<?php echo $_SESSION["mail"];?>" hidden>
								<input type="number" name="cart"  min="0" max="<?php echo $productQuantity; ?>" id="cart">
								<input type="text" hidden name="product_id" value="<?=$productUid?>">
							</div>
							 <input type="submit" class="button wishlist" name="add-to-wishlist" value="ADD TO WISHLIST">

							 <input type="submit" class="button buy-button" name="add-to-cart" value="ADD TO CART">
							  
	  							
						</form>
							</div>

					</div>

							<p class="small-text"><strong>Standard delivery</strong> 2-5 working days</p>
							<p class="small-text"><strong>Next day delivery</strong> order before 2pm ($5.79)</p>
								<a href="index.html"></a>
				</div>
			</div>

		</div>
		</div>
	</div>
	<div class="footer">
            <div class="footer-wrapper">
                <div class="footer-list">
                    <ul>
                        <li><h2 style="text-align: center; text-transform: uppercase;font-weight: 600;letter-spacing: .5em;font-size: 1.5rem;">Contact Us</h2></li>
                        <li>Email us: dukani@gmail.com</li>
                        <li>Call us: +255 7XXXX XXXX</li>
                    </ul>
                </div>
                <div class="signup">
                    <p>Sign up for our free newsletter and be the first to hear about upcoming sales, discount codes and new arrivals.</p>
                    <div class="signup-form">
                        <input class="signup-input" type="text" name="mail" placeholder="Enter Email Address">
                        <button class="signup-button"><i class='bx bxs-right-arrow-circle'></i></button>
                    </div>
                    <div class="signup-icons">
                        <i class='bx bxl-facebook-circle'></i>
                        <i class='bx bxl-twitter'></i>
                        <i class='bx bxl-youtube'></i>
                        <i class='bx bxl-instagram'></i>
                        <i class='bx bxl-pinterest'></i>
                    </div>
                </div> <!-- signup -->
            </div> <!-- footer-wrapper -->
        </div> <!-- footer -->

	</div>
						


          		
<script src="js/app.js">
	
</script>
</body>
</html>

