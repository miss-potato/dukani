
<?php

include ('config/config.php');


if (isset($_POST['addcategory'])) {
    $category =$_POST['categoryname'];

    $sql = "INSERT INTO product_category(category_name) VALUES(?);";
    $stmt = mysqli_stmt_init($connect);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:landing.php?Something went wrong");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $category);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:landing.php");
        exit();
    }
    
}


?>

