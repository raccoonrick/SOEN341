<?php include "../header.php";?>
<link rel="stylesheet" href="../css/style.css" />

    <div class="card-wrapper">
      <div class="card">
        <!-- card left -->
        <div class="product-imgs">
          <div class="img-display">
            <div class="img-showcase">
              <img src="../img/Candle1.jpeg" alt="Candle image" />
              <img src="../img/Candle2.jpeg" alt="Candle  image" />
              <img src="../img/Candle3.jpeg" alt="Candle  image" />
            </div>
          </div>
          <div class="img-select">
            <div class="img-item">
              <a href="#" data-id="1">
                <img src="../img/Candle1.jpeg" alt="Candle  image" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="2">
                <img src="../img/Candle2.jpeg " alt="Candle  image" />
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="3">
                <img src="../img/Candle3.jpeg" alt="Candle image" />
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class="product-content">
          <h2 class="product-title">Candle</h2>
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
            <p class="last-price">Old Price: <span>$34.99</span></p>
            <p class="new-price">New Price: <span>$20.99</span></p>
          </div>

          <div class="product-detail">
            <h2>About this item:</h2>
            <p>Light up bright</p>
            <p>Scent limoncello</p>
            <p>100% cotton wick</p>
            <ul>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Home Goods</span></li>
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