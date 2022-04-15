
<?php
session_start();
include("./config/config.php");
include("./config/sessions.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>S H O P</title>
</head>
<style>
    .products {
        margin-top: 126px;
    }
    .img {
        width: 12rem;
        height: 14rem;
    }

    a {
        text-decoration: none;
        color: black;
    }

    .products-wrapper {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    justify-content: center;
    width: 80%;
    margin: auto;
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
                <li><a href="logout.php">Logout</a></li>
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
          $sql = "SELECT * FROM product WHERE category_id=8";
          $result = mysqli_query($connect,  $sql);

          if (mysqli_num_rows($result) > 0) {
          	while ($row = mysqli_fetch_assoc($result)) {  ?>
             

             <div class="card">
                    <img src="images/<?=$row['image_url']?>" class="img">
                    <div class="card-title"><?php echo $row['name']; ?></div>
                    <div class="card-price">TZS <?php echo $row['price']; ?></div>
                    <button class="card-button"> <a href="view.php?id=<?php echo $row['id']; ?>">Buy</a></button>
                </div>

          		
    <?php } }?>

            </div>
            </div> 

        </div>




      
    </div>
</body>
</html>
