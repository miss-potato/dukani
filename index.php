
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
<style>
    .img {
        width: 12rem;
        height: 14rem;
    }
    
.card-wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    justify-content: center;
    width: 80%;
    margin: auto;
}

a {
    text-decoration: none;
    color: black;
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
                <a href="cart.php"><i class='bx bx-shopping-bag'></i></a>   
                
            </div>
        </div>

        <div class="hero">

                <h1>Enjoy your Shopping Experience</h1>
            <button class="card-button"> <a href="shop.php" style="text-decoration: none;">SHOP NOW</a> </button>
         
        </div>
        <div class="featured-products">
            <h2>Featured Products</h2>
            <div class="card-wrapper">
            <?php 
          $sql = "SELECT * FROM product WHERE tag_id =1";
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

        <div class="jeans">
            <div class="jeans-wrapper">
                
                <div class="jeans-text">
                    <h2 class="jeans-header">You take control of the product you love.</h2>
                    <p>Buying and selling doesn't always have to be a tedious job. Stressing about whether your product will arrive or not or whether you can sell a product and receive payment on time.</p>
                    <div class="jeans-extra-text">
                        <p>Dukani is the best fit for anyone who wants smooth sailing all the way when they want to buy something cute, handy or useful. Or clear out some old things and make money off it.</p>
                        <p>Everything is carefully curated to ensure that the experience of the user is as swift as possible</p>
                    </div>
                    <p class="jeans-read-more">Read more...</p>
                    <button class="jeans-button"> <a href="shop.php" style="text-decoration: none;"> Shop Now</a>
                   </button>
                </div>
            </div>
        </div>

        <div class="instagram">
            <div class="instagram-wrapper">
                <h2 style="text-align: center; text-transform: uppercase;font-weight: 600;letter-spacing: .5em;font-size: 1.5rem;">CATEGORIES</h2>
                <ul class="instagram-photos">
                
                    <li><a href="tops.php"><img src="images/20220111_154413_0000.png"></a></li>
                    <li><a href="tops.php"><img src="images/20220111_154413_0000.png"></a></li>
                    <li><a href="bottoms.php"><img src="images/20220111_154413_0001.png"></a></li>
                    <li><a href="shoes.php"><img src="images/20220111_154413_0002.png"></a></li>
                    <li><a href="dress.php"><img src="images/20220111_154413_0003.png"></a></li>
                    <li><a href="sets.php"><img src="images/6.png"></a></li>
                    <li><a href="jewelry.php"><img src="images/5.png" alt=""></a></li>
                    <li><a href="shop.php"><img src="images/20220111_154413_0004.png"></a></li>
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
        </div> <!-- footer -->

    </div> <!-- container -->

    <script src="js/app.js"></script>
</body>
</html>
