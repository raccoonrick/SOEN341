<?php include "../header.php";?>
<link rel="stylesheet" href="../css/style.css" />

<div class="card-wrapper">
      <div class="card">
        <!-- card left -->
        <div class="product-imgs">
          <div class="img-display">
            <div class="img-showcase">
              <img class="product-img"  src="../img/Ivy1.jpeg" alt="Book3 image" />
              <img class="product-img" src="../img/Ivy2.jpeg" alt="Book3 image" />
              <img class="product-img" src="../img/Ivy3.jpeg" alt="Book3 image" />
            </div>
          </div>
          <div class="img-select">
            <div class="img-item">
              <a href="#" data-id="1">
                <img class="product-img" src="../img/Ivy1.jpeg" alt="Book3 image" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="2">
                <img class="product-img" src="../img/Ivy2.jpeg" alt="Book3 image" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="3">
                <img class="product-img" src="../img/Ivy3.jpeg" alt="Book3 image" />
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class="product-content">
          <h2 class="product-title">Ivy + Bean Books set</h2>
          <a href="#" class="product-link">visity Soenify</a>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class="product-price">
            <p class="last-price">Old Price: <span>$107.99</span></p>
            <p class="new-price">New Price: <span>$89.99</span></p>
          </div>

          <div class="accordian">
              <button class = "btn btn-outline-secondary" onclick="displayText()" for= "title1"> More Description</button>
                    <p id="description-text" style="display:none;"> <br/>
            Books (4-6)
            <br>
            Language: English
            <br>
              Available: <span>in stock</span><br>
               Category: <span> <a href="books.html">Books</a></span>
            
            </p>
          </div>

          <div class="purchase-info">
            <input type="number" min="0" value="1" />
            <button type="button" class="btn">
              Add to Cart <i class="fas fa-shopping-cart"></i>
            </button>
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