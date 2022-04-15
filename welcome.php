<?php
session_start();
include("./config/config.php");
include("./config/sessions.php");


$sql = "SELECT * FROM product;";

$result = mysqli_query($connect, $sql);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="shortcut icon" href="images/20211123_195310_0000.png" type="image/x-icon">
    <title> A R E N A</title>
</head>
<body>
    <div class="topnav">
        <a href="index.html"><img style="width: 50px; height: 50px;" src="images/Fashion & Design School (1).png" alt="logo"></a>
                <a href="index.html">HOME</a>
                <a href="shop.php">SHOP</a>
                <a href="about.html">ABOUT</a>
                <a href="login.php">LOGIN</a>
                <a href="profile.php">PROFILE</a>
            <div><input type="search" name="search" id="search" placeholder="search"></div>  
        </div>
        
    </div>
    
    <div class="intro" style="background-image: url('images/Untitled\ design.png');">
        <div class="heading" style="width: 70%; background-color: #332625; margin: auto; padding: 1rem;">
            <h2 style="color: white; text-align: center;">RE-INVENTING FASHION</h2>
            <p style="color: white;">Check out exclusive deals and the best discounts this season.</p>
            <p style="color: white;">Comfortability at an affordable price.</p>
            <p style="color: white;">You'll never have to complain about online shopping ever again</p>
        <a href="product.html"><input type="button" class="shopBtn" name="button" value="SHOP NOW"></a>
        </div>
          
    </div>
    <div>
        <div style="padding: 1rem; text-align: center;"><h2 style="font-weight: 400;">CATEGORIES</h2></div>
        
        <table class="categories">
            <tr>
                <td style="background-color: #332625; color: white; padding: 1rem;"> <a href="shop.html">ALL</a> </td>
                <td style="background-color: #EBD7D5; color: black;"> <a href="jewelry.html" style="color: black;">JEWELRY</a></td>
            </tr>
            <tr>
                <td style="background-color: #EBD7D5; padding: 1rem; color: black;"> <a href="bags.html" style="color: black;">BAGS</a> </td>
                <td style="background-color: #332625; color: white;"> <a href="tops.html">TOPS</a> </td>
            </tr>
            <tr>
                <td style="background-color: #332625; color: white; padding: 1rem;"> <a href="shoes.html">SHOES</a> </td>
                <td style="background-color: #EBD7D5; "> <a href="bottom.html" style="color: black;">BOTTOMS</a> </td>
            </tr>
        </table>
    </div>
    <div class="content"> 

        <div class="new-arrivals">
            <?php while($row = mysqli_fetch_array($result)) ?>
            <div class="product-card">
            <div class="product-image">
                    <span class="discount-tag">20% off</span>
                    <img src="<?php echo $image_src; ?>" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h4 class="product-brand"><?php echo $productName; ?></h4>
                    <span class="price">TZS <?php echo  $productPrice; ?></span>
                </div>
            </div>


        
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">20% off</span>
                    <img src="images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h4 class="product-brand">sneakers</h4>
                    <span class="price">TZS 30,000/=</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">20% off</span>
                    <img src="images/engin-akyurt-RSm7GBuMqos-unsplash.jpg" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h4 class="product-brand">WIDE LEG PANTS</h4>
                    <span class="price">TZS 25,000/=</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">20% off</span>
                    <img src="images/raquel-gambin-kS3YkVtf85U-unsplash.jpg" class="product-thumb" alt="">
                   
                </div>
                <div class="product-info">
                    <h4 class="product-brand">DRESS</h4>
                    <span class="price">TZS 5,000/=</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">20% off</span>
                    <img src="images/mostafa-mahmoudi-3OZr-hLbsq0-unsplash.jpg" class="product-thumb" alt="">
                    
                </div>
                <div class="product-info">
                    <h4 class="product-brand">shoes</h4>
                    <span class="price">TZS 15,000/=</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">20% off</span>
                    <img src="images/engin-akyurt-RSm7GBuMqos-unsplash.jpg" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h4 class="product-brand">WIDE LEG PANTS</h4>
                    <span class="price">TZS 25,000/=</span>
                </div>
            </div>

        </div>

        <div class="view-btn"> <a href="shop.html"><button class="view">VIEW MORE</button></a></div>
       
    </div>


    <div class="footer">
        <h6>CONTACT US</h6>
        <p class="footer-p">Call us: +2557XXXXXXXX</p>
        <p class="footer-p">Email us: thearena@gmail.com</p>
        <p>Follow us on ig: <a href="#">arena</a> </p>
        <p class="footer-p" style="text-align: center;">Copyright © 2022. All Rights Reserved.</p>
    </div>

    <script src="js/index.js">

    </script>
</body>
</html>