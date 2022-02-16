<?php
require_once "../config.php";
$sql = "SELECT * FROM products WHERE product_category='Makeup products'";
          $result = $link->query($sql);
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
    <link rel =  "stylesheet" href = "../css/subcat.css">

</head>
<body>

    <div class="container-fluid" style= "text-align:center">
        <div class="row">
            <div class="col-lg-12 title">
                <h3>NYX makeup Products</h3>
            </div>
        </div>
<br/>
    <div class="row">
        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $images = explode("|",$row["product_img"]);
                echo "<div class='col-md-3 col-sm-6'>";
                echo "<div class='product-grid'>";
                echo "<div class='product-image'>";
                echo "<a href='../products/" . $row["product_link"] . "'class='image'>";
                echo "<img class='pic-1' src='../img/" . $images[0] . "'>";
                echo "<img class='pic-2' src='../img/" . $images[2] . "'>";
                echo "</a>";
                echo "<a href='' class='product-like-icon'><i class='far fa-heart'></i></a>";
                echo "<ul class='product-links'>";
                echo "<li><a href='#'><i class='far fa-heart'></i></a></li>";
                echo "<li><a href='#'><i class='far fa-random'></i></a></li>";
                echo "<li><a href='#'><i class='far fa-eye'></i></a></li>";
                echo "<li><a href='#'><i class='far fa-shopping-cart'></i></a></li>";
                echo "</ul>";
                echo "</div>";
                echo "<div class='product-content'>";
                echo "<h3 class='title'><a href='#'>". $row["product_name"] . "</a></h3>";
                if($row["product_onsale"] == 1){
                    echo "<div class='price'>" . $row["product_saleprice"] . "</div>";
                }
                else{
                    echo "<div class='price'>" . $row["product_price"] . "</div>";
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        }
        ?>
    </div>
   </body>
</html>
