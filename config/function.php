<?php

$result;

function emptysignup($user, $email, $pass, $conf_pass) {
    if(empty($user)||empty($email)||empty($pass)||empty($conf_pass)){

        $result = true;

    } else {
        $result = false;
    } 
    
    return $result;
}
  ///.,,,,,,,

function usedusername($connect, $user) {

    $sql = "SELECT * from user WHERE username= ?;";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:register.php?statementfailed");
        exit();
    }
        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        if($row = mysqli_fetch_assoc($result)) {
            return $row;
        } else {
            $result = false;
            return $result;
        }
       }

function invalidemail($email)  {
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result =true;
    } else {
        $result = false;
    }

    return $result;
}

function usedemail($connect, $email) {
    

        $sql = "SELECT * from user WHERE email_adress= ?;";
        $stmt = mysqli_stmt_init($connect);
    
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location:register.php?statementfailed");
            exit();
        }else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
    
            if($row = mysqli_fetch_assoc($result)) {
                return $result;
            } else {
                $row = false;
                return $row;
            }
            mysqli_stmt_close($stmt);
        }
    
}

function weakpassword($pass) {
    if(strlen($pass)< 6) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function passworddontmatch($pass, $conf_pass) {
    if($pass !== $conf_pass) {
        $result = true;
    } else {
        $result =false;
    }
    return $result;
}

function insertData($connect, $user, $email, $pass){
    $sql = "INSERT INTO user(username, email_adress, password) VALUES(?, ? ,?);";
    $stmt = mysqli_stmt_init($connect);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:register.php?Something went wrong");
        exit();

    } else {
        $hash_pwd = password_hash($pass, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sss", $user, $email,$hash_pwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:login.php");
        exit();
    }
}

function emptylogin($user, $pass) {
    if(empty($user)||empty($pass)) {
        $result =true;
    } else {
    $result = false;
    } return $result;
}

function loginUser($connect, $user, $pass) {
   $userExist=usedusername($connect, $user);
   if($userExist===false){
       header("location:./login.php?error=wronglogin");
       exit();
   }else{
       $hashedPwd=$userExist["password"];
       $passverify=password_verify($pass,$hashedPwd);
       if($passverify===false){
        header("location:./login.php?error=wronglogin");
        exit(); 
       }else{
           session_start();
           $_SESSION["name"]=$userExist["username"];
           $_SESSION["user_id"]=$userExist["id"];
           $_SESSION["mail"]=$userExist["email_adress"];
           header("location:index.php");
           exit();
       }
   }
    
    }

    function emptyfields($productName, $productDesc, $productPrice) {
        if(empty($productName)||empty($productDesc)||empty($productPrice)){
    
            $result = true;
    
        } else {
            $result = false;
        } 
        
        return $result;
    }

function  insertIntoCartItem($connect,$userId,$userMail,$productId,$productQuantity){
    $sql="INSERT INTO cart_item(userId,email_adress,product_id,quantity,price) VALUES(?,?,?,?);";
    $stmt=mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:./view.php?error=stmtfailed");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"ssss",$userId,$userMail,$productId,$productQuantity);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:./cart.php?error=none");
        exit();
    }
}

?>

