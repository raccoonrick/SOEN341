<?php
include "../header.php";
// Get products from category
$sql = "SELECT * FROM products WHERE product_category='Home Goods'";
        $result = $link->query($sql);
?>
<link rel =  "stylesheet" href = "../css/subcat.css">
    <link rel =  "stylesheet" href = "../css/headernfooter.css">
    <!-- <link rel="stylesheet" href="/css/cartStyle.css"> -->
     <!--ICONS-->
   <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<body>
    

    <div class="container-fluid" style=" text-align:center">
        <div class="row">
            <div class="col-lg-12 title">
                <h3>Home</h3>
            </div>
        </div>
<br/>
<br/><br/>
    <div class="row">
    <?php
        

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                // Display each product
                $images = explode("|",$row["product_img"]);
                echo "<div class='col-md-3 col-sm-6'>";
                echo "<div class='product-grid'>";
                echo "<div class='product-image'>";
                echo "<a href='../products/" . $row["product_link"] . "'class='image'>";
                echo "<img class='pic-1' src='../img/" . $images[0] . "'>";
                    echo "<img class='pic-2' src='../img/" . $images[0] . "'>";
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
                echo "<h3 class='title product-title'><a href='#'>". $row["product_name"] . "</a></h3>";
                if($row["product_onsale"] == 1){
                    echo "<div class='price'>$" . $row["product_saleprice"] . "</div>";
                }
                else{
                    echo "<div class='price'>$" . $row["product_price"] . "</div>";
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        }
        ?>
    </div>
    <?php include "../footer.php";?>