<?php
if(isset($_POST['register'])) {
    $user = $_POST['username'];
    $email = $_POST['email_adress'];
    $pass = $_POST['password'];
    $conf_pass = $_POST['confirm_password'];

    include("./config/config.php");
    include("./config/function.php");

    if(emptysignup($user, $email, $pass, $conf_pass) !== false) {
        header("location:register.php?error=emptyinputs");
        exit();
    }

    if(usedusername($connect, $user)!==false) {
        header("location:register.php?error=usedusername");
        exit(); 
    }

    if(invalidemail($email)!== false) {
        header("location:register.php?error=emailinvalid");
        exit();  
    }

    if(usedemail($connect, $email)!==false) {
        header("location:register.php?error=emailused");
        exit(); 
    }

    if(weakpassword($pass)!== false) {
        header("location:register.php?error=weakpassword");
        exit(); 
    }

    if(passworddontmatch($pass, $conf_pass)!==false) {
        header("location:register.php?error=passworddon'tmatch");
        exit(); 
    }

    insertData($connect, $user, $email, $pass);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
</head>
<body>
<div class="container">
    
        <form class="form" method="post">
            <div class="inputContainer">
                <input  type="text" class="input" name="username" placeholder="Username">
            </div>

            <div class="inputContainer">
                <input class="input" type="email" name="email_adress" placeholder="Email Adress">
        </div>
                
            <div class="inputContainer">
                <input  type="password" class="input"  placeholder="Password" name="password">
            </div>

            <div class="inputContainer">
                <input  type="password" class="input" placeholder="Confirm Password" name="confirm_password">
            </div>

            <input type="submit" class="SubmitBtn" name="register" value="R E G I S T E R">
                
            <p>Already have an account? <a href="login.php">Login Here</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>