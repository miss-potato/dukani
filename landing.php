<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.wrapper{ 
    width: 60%; 
    margin: 0 auto; 
    padding-bottom: 2rem;
}

table tr td:last-child{ 
    width: 120px; 
}

.img {
    width: 100px;
	height: 150px;
}

</style>

<script>$(document).ready(function(){ $('[data-toggle="tooltip"]').tooltip(); });</script>

</head>

<body>


<div class="wrapper">

    <div class="container-fluid">

      <div class="row">

        <div class="col-md-12">

        <div style="margin-top: 50px;">
            <p><a href="profile.php">Back</a></p>
        </div>

                    <div class="mt-5 mb-3 clearfix">

                        <h2 class="pull-left">Product Details</h2>

                        <a href="create.php" class="btn btn-warning pull-right"><i class="fa fa-plus"></i> Add New Product</a>

                    </div>

            <?php

            // Include config file

                include 'config/config.php';

            // Attempt select query execution

                $sql = "SELECT * FROM product";

                if($result = mysqli_query($connect, $sql)){

                    if(mysqli_num_rows($result) > 0){

                        echo '<table class="table table-bordered table-striped">';

                        echo "<thead>";

                        echo "<tr>";

                       

                        echo "<th>Name</th>";

                        echo "<th>Description</th>";

                        echo "<th>Price</th>";

                        echo "<th>Qty</th>";

                        echo "<th>Photo</th>";

                        echo"<th>Action</th>";

                        echo "</tr>";

                        echo "</thead>";

                        echo "<tbody>";

                        while($row = mysqli_fetch_array($result)){

                            echo "<tr>";

                            echo "<td>" . $row['name'] . "</td>";

                            echo "<td>" . $row['description'] . "</td>";

                            echo "<td>" . $row['price'] . "</td>";

                            echo "<td>" . $row['quantity'] . "</td>";

                            
                            echo "<td><img src='images/".$row['image_url']."' class='img'></td>";

                            echo "<td>";

                        

                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Product" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';

                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Product" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';

                            echo "</td>"; 
                            echo "</tr>";

                        }

                        echo "</tbody>";

                        echo "</table>";

                        // Free result set

                        mysqli_free_result($result);

                    } else{

                        echo '<div class="alert alert-danger"><em>No products were found.</em></div>';
                    }
                } else{

                    echo "Oops! Something went wrong. Please try again later."; }

                    // Close connection 
                    mysqli_close($connect); ?>

        </div>
      </div>

      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Add New Category</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
      <form action="categories.php" method="post">
                <div class="form-group">
                    <label for="Productname">Category Name</label>
                    <input type="text" class="form-control" name="categoryname" id="Categoryname" placeholder="Category Name">
                </div>
                <button type="submit" name="addcategory" class="btn btn-warning">Add Category</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</body>
</html>