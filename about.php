
<?php
session_start();
include("./config/config.php");
include("./config/sessions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D U K A N I</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
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
                    <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            <div class="account">
                <a href="profile.php"><i class='bx bx-user'></i></a> 
                <a href="cart.php"> <i class='bx bx-shopping-bag'></i></a>  
               
            </div>
        </div>

        <div class="section" style="text-align: center;
        margin-top: 126px;">
           <h2>About Dukani</h2>
        
            <p>Welcome to Dukani, your number one source for all things skin care and make-up.
             We're dedicated to providing you with the very best, with an emphasis on quality, 
             affordability and great customer care</p>
          <p>Founded in 2021 by Miss Anisa George, Azura beauty has come a long way form it beginnings. 
            When our founder first started, her passion for all things fashion which drove her 
            to start the business.</p>
          <p>We hope you enjoy our products as much as we enjoy offering them to you.
            If you have any questions or comments, please don't hesitate to contact us.
        </p>
        <p>Sincerely,</p>
        <p>Vanessa Linus</p>
        
        
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

    </div> <!-- container -->

    <script src="js/app.js"></script>
    
</body>
</html>