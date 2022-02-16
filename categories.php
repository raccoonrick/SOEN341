<?php
session_start();
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soenify</title>
   <link rel="icon" href="#" type="image/icon type">
    <!----CSS and Bootstrap style---->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e6f61e0e67.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel =  "stylesheet" href = "../css/categories.css">
</head>
<body>
    <div class="card-deck">

        <h1 style="text-align: center; color: white; width: 100%; font-size: 6rem">DEPARTMENTS</h1>
    
        <a id="aisles"></a>
        <div class="row">
          <?php
          $sql = "SELECT * FROM categories";
          $result = $link->query($sql);
          
          if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                echo "<div class='col-lg-4 col-md-6'>";
                echo "<a href='categories/" . $row["cat_link"] . "'>";
                echo "<div class='card'>";
                echo "<img class='card-img-top' src='img/" . $row["cat_img"] . "' alt='Card image cap'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title' style='text-align: center; font-size: x-large;'>" . $row["cat_name"] . "</h5>";
                echo "</div>";
                echo "</div>";
                echo "</a>";
                echo "</div>";
              }
          }

          ?>
        </div>
        </div>
      </div>
      <br/> 
      <div class="text-center" >
        <?php
        if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true){
          echo "<a href = 'addnewcategory.php' class='btn btn-outline-primary' style='float: left-cent;'>Add New Category</a>";
        }
        ?>
     <!-- <a href = "../src/addnewcategory.html" class="btn btn-outline-primary" style="float: left-center;">Add new category</a> -->
      </div>
  </body>
 </html>