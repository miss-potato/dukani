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
    <link rel="stylesheet" href="css/account.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>A C C O U N T</title>
</head>
<body>

<div class="sidebar-modal-content">
        <ul>
            <li class="clickable"><i class='bx bx-x'></i></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
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
                    <li><a href="index.php">HOME</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            <div class="account">
                <a href="profile.php"><i class='bx bx-user'></i></a>   
                <a href="cart.php"><i class='bx bx-shopping-bag'></i></a>
                
            </div>
        </div>

<div class="section">
    
        <h3>Welcome @<?php
        echo($user);
       
        ?></h3>
    <div class="list">
        <ul>
            <li><a href="landing.php">SELL PRODUCT</a></li>
            <li><a href="cart.php">CART</a></li>
        </ul>
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
        </div>

    </div>

    <script src="js/app.js"></script>
    
</body>
</html>