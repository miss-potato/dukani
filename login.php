 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="wrapper">
        <form class="form" action="log_funct.php" method="post">
                  
            <div class="inputContainer">
                <input  type="text" class="input" name="username" placeholder="Username">
            </div>

            <div class="inputContainer">
                <input  type="password" class="input" placeholder="Password" name="password">
            </div>

        <input type="submit" class="LoginBtn" value="Login" name="login">
           
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>