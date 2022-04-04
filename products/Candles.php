<?php include "../header.php";?>
<link rel="stylesheet" href="../css/style.css" />
 <script type="text/javascript" src="../js/products.js"></script>
<?php 

//Info for products
$itemid = 15;
//Add to cart functionality
include "../addtocart.php";
include "../reviews.php";
?>


<div class="card-wrapper">
      <div class="card">
        <!-- card left -->
        <div class="product-imgs">
          <div class="img-display">
            <div class="img-showcase">
              <img class="product-img" src="../img/Candle1.jpeg" alt="Candle image" />
              <img class="product-img" src="../img/Candle2.jpeg" alt="Candle  image" />
              <img class="product-img"g src="../img/Candle3.jpeg" alt="Candle  image" />
            </div>
          </div>
          <div class="img-select">
            <div class="img-item">
              <a href="#" data-id="1">
                <img class="product-img" src="../img/Candle1.jpeg" alt="Candle  image" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="2">
                <img class="product-img" src="../img/Candle2.jpeg " alt="Candle  image" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="3">
                <img class="product-img" src="../img/Candle3.jpeg" alt="Candle image" />
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class="product-content">
          <h2 class="product-title">Candle</h2>
          <a href="#" class="product-link">visity Soenify</a>
          <?php displayStars($num_stars,$num_ratings); ?>

          <div class="product-price">
            <p class="last-price">Old Price: <span>$34.99</span></p>
            <p class="new-price">New Price: <span>$20.99</span></p>
          </div>

          <div class="accordian">
              <button class = "btn btn-outline-secondary" onclick="displayText()" for= "title1"> More Description</button>
                    <p id="description-text" style="display:none;"> <br/>
            Light up bright
            <br>
            Scent limoncello
            <br>
            100% cotton wick
            <br>
              Available: <span>in stock</span><br>
              Category: <span> <a href="../categories/home.php">Home Goods</a></span>
                    </p>
          </div>

          <div class="purchase-info">
            <form action="Candles.php" method="post" enctype="multipart/form-data">
              <input type="number" name="quantity" min="0" value="1" />
              <button type="submit" class="btn add-cart">
              Add to Cart<i class="fas fa-shopping-cart"></i>
              </button>
            </form>
          </div>
          <?php
            while($db_review= mysqli_fetch_array($reviews)){
          ?>
				<h4><?=$db_review['rating'];?> <i class="fas fa-star" data-rating="2" style="font-size:20px;color:green;"></i> by <span style="font-size:14px;"><?=getUserName($db_review['user_id']);?></span></h4>
				<p><?=$db_review['comment'];?></p>
				<hr>
          <?php	
            }
              
          ?>
          
          <?php
            if(purchasedProduct($itemid)):
          ?>
          <!-- Add review and rating -->
          <div class="purchase-info">
            <form action="../addreview.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="itemid" id="itemid" value=<?php echo $itemid;?>>
              <input type="number" name ="rating" id="rating" min=1 max=5 value="1" />
            <textarea class="form-control" rows="3" placeholder="Write your review here..." name="comment" id="comment"required></textarea><br>
            <p><button type="submit"  class="btn btn-default btn-sm btn-info" id="srr_rating">Submit</button></p>
            </form>
            </div>
            
        <?php endif;?>
        


          <div class="social-links">
            <p>Share At:</p>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#">
              <i class="fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php include "../footer.php";?>