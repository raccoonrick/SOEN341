<?php include "../header.php";?>
<!-- <link rel="stylesheet" href="/css/cartStyle.css"/> -->
<<link rel="stylesheet" href="../css/style.css" />
    <div class="card-wrapper">
      <div class="card">
        <!-- card left -->
        <div class="product-imgs">
          <div class="img-display">
            <div class="img-showcase">
              <img class="product-img" src="../img/Airpods1.jpg" alt="AirPods image" />
              <img src="../img/Airpods2.jpg" alt="AirPods  image" />
              <img src="../img/Airpods3.jpg" alt="AirPods image" />
            </div>
          </div>
          <div class="img-select">
            <div class="img-item">
              <a href="#" data-id="1">
                <img src="../img/Airpods1.jpg" alt="AirPods  image" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="2">
                <img src="../img/Airpods2.jpg " alt="AirPods image" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="3">
                <img src="../img/Airpods3.jpg" alt="AirPods image" />
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class="product-content">
          <h2 class="product-title">AirPods</h2>
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
            <p class="last-price">Old Price: <span>229.99</span></p>
            <p class="new-price">New Price: <span class="price">$210.99</span></p>
          </div>

          <div class="product-detail">
            <h2>About this item:</h2>
            <p>3rd generation</p>
            <p>Longer battery life and spatial audio</p>
            <ul>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Electronics</span></li>
            </ul>
          </div>

          <div class="purchase-info">
            <input type="number" min="0" value="1" />
            <button type="button" class="btn add-cart">
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

    <?php include "../footer.php"?>