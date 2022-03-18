<?php include "../header.php";?>
        <link rel="stylesheet" href="../css/style.css" />
         <script type="text/javascript" src="../js/products.js"></script>
        <?php 

        //Info for products
        $itemid = 14;
        //Add to cart functionality
        include "../addtocart.php";

        ?>
        
            <div class="card-wrapper">
              <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                  <div class="img-display">
                    <div class="img-showcase">
                      <img src="../img/test.png" alt="Stock image" />
                    </div>
                  </div>
                  <div class="img-select">
                    <div class="img-item">
                      <a href="#" data-id="1">
                        <img src="../img/test.png" alt="Stack image" />
                      </a>
                    </div>
                  </div>
                </div>
                <!-- card right -->
                <div class="product-content">
                  <h2 class="product-title">Testing</h2>
                  <a href="#" class="product-link">visity Soenify</a>
                  <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>4.7(21)</span>
                  </div>
                  <div class="product-price"><p class="new-price">Price: <span>$12</span></p>
                  </div>
        
                  <div class="accordian">
                    <button class = "btn btn-outline-secondary" onclick="displayText()" for= "title1"> More Description</button>
                          <p id="description-text" style="display:none;"> <br/>
                          asdlkfasldkfh
                    Available: <span>in stock</span><br>
                    Category: <span> Electronics</span>
                  
                  </p>
                </div>
                    
                  <div class="purchase-info">
                    <form action="Testing.php" method="post" enctype="multipart/form-data">
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
            <?php include "../footer.php";?>