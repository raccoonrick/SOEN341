<?php include "../header.php";?>
<link rel="stylesheet" href="../css/style.css" />
    <div class="card-wrapper">
      <div class="card">
        <!-- card left -->
        <div class="product-imgs">
          <div class="img-display">
            <div class="img-showcase">
              <img src="../img/Dumbbell1.jpg" alt="Dumbbell image" />
              <img src="../img/Dumbbell2.jpg" alt="Dumbbell image" />
              <img src="../img/Dumbbell3.jpg" alt="Dumbbell image" />
            </div>
          </div>
          <div class="img-select">
            <div class="img-item">
              <a href="#" data-id="1">
                <img src="../img/Dumbbell1.jpg" alt="Dumbbell image" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="2">
                <img src="../img/Dumbbell2.jpg " alt="Dumbbell image" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="3">
                <img src="../img/Dumbbell3.jpg" alt="Dumbbell image" />
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class="product-content">
          <h2 class="product-title">Dumbbell</h2>
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
            <p class="last-price">Old Price: <span>$74.99</span></p>
            <p class="new-price">New Price: <span>$64.99</span></p>
          </div>

          <div class="product-detail">
            <h2>About this item:</h2>
            <p>Weight varies between 20 to 50 LB</p>

            <ul>
              <li>Color: <span>Black</span></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Fitness</span></li>
            </ul>
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
