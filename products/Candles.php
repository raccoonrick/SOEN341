<?php include "../header.php";?>
<link rel="stylesheet" href="../css/style.css" />
 <script type="text/javascript" src="products.js"></script>
  <style>
.accordion {
  background-color: #ffffff;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
border:none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ADD8E6;
}

.accordion:after {
  content: '\25BC';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}
.active:after {
  content: "\25B2"; /* Unicode character for "minus" sign (-) */
}


.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
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
          <a href="../index.php" class="product-link">visity Soenify</a>
          <?php displayStars($num_stars,$num_ratings); ?>

          <div class="product-price">
            <p class="last-price">Old Price: <span>$34.99</span></p>
            <p class="new-price">New Price: <span>$20.99</span></p>
          </div>

       <button class="accordion"><strong>Description</strong></button>
         <div class="panel">
               Light up bright
            <br>
            Scent limoncello
            <br>
            100% cotton wick
            <br>
              Available: <span>in stock</span><br>
              Category: <span> <a href="../categories/home.php">Home Goods</a></span>
      </div>

       <button class="accordion"><strong>Reviews</strong></button>
         <div class="panel">
             <?php
            while($db_review= mysqli_fetch_array($reviews)){
          ?>
				<h5><?=$db_review['rating'];?> <i class="fas fa-star" data-rating="2" style="font-size:14px;color:#50C878;"></i> by <span style="font-size:14px; font-family:Arial"><?=getUserName($db_review['user_id']);?></span></h5>
				<p><span style="font-size:16px; font-family:Lucida Console"><?=$db_review['comment'];?></span></p>
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
      </div>

          <div class="purchase-info">
            <form action="Candles.php" method="post" enctype="multipart/form-data">
              <input type="number" name="quantity" min="0" value="1" />
              <button type="submit" class="btn add-cart">
              Add to Cart<i class="fas fa-shopping-cart"></i>
              </button>
            </form>
          </div>

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
        <script>
        var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
    </script>
    <?php include "../footer.php";?>