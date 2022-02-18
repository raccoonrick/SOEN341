<?php include "../header.php";?>
<link rel="stylesheet" href="../css/style.css" />
    <div class="card-wrapper">
      <div class="card">
        <!-- card left -->
        <div class="product-imgs">
          <div class="img-display">
            <div class="img-showcase">
              <img src="../img/Book1.jpg" alt="Book1 image" />
            </div>
          </div>
          <div class="img-select">
            <div class="img-item">
              <a href="#" data-id="1">
                <img src="../img/Book1.jpg" alt="Book1 image" />
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class="product-content">
          <h2 class="product-title">The maze runner series</h2>
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
            <p class="last-price">Old Price: <span>$87.99</span></p>
            <p class="new-price">New Price: <span>$62.99</span></p>
          </div>

          <div class="product-detail">
            <h2>About this item:</h2>
            <p>Pages: 422 Pages</p>
            <p>Language: English</p>
            <p>A thriller story</p>
            <ul>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Books</span></li>
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
  <!--Start of footer-->
  <footer>
    <div class="top">
      <div class="container-fluid p-0">
        <div class="row text-left">
          <div class="col-md-5 col-md-5">
            <h4 class="text-dark">Who are we?</h4>
            <p class = "text-muted">
              <br>Soenify is an e-commerce website. It will include many features and products.
              The team is available 24/7 for any occurring issues.</br>
            </p>
          </div>

          <div class="col-md-5 col-sm-12">
            <h4 class="text-dark">Stay in the know</h4>
            <p class="p-0 text-muted">Join our mailing list to get exclusive deals</p>
            <form class="form-inline">
              <div class="col pl-0">
                <div class="input-group pr-5">
                  <input type="text" class="form-control bg-light text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <p class="text-muted">You may unsubscribe at any time.</p>
          </div>

          <div class="col-md-2 col-sm-12">
            <h4 class="text-dark">Follow Us</h4>
            <p class="text-muted">Lets keep in touch</p>
            <div class="column text-dark">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-youtube"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="container-fluid p-0">
        <div class="bottom row text-left">
          <div class="col-md-3 col-sm-12">
            <h4 class="pt-3 text-light"><br>Customer Service</br></h4>
            <a href="pagenotfound.html" class="text-muted">Help</a>
            <a href="pagenotfound.html" class="text-muted"><br>Product Recalls</br></a>
            <a href="pagenotfound.html" class="text-muted">Shipping & Returns</a>
            <a href="pagenotfound.html" class="text-muted"><br>Contact Us</br></a>
          </div>
          <div class="col-md-3 col-sm-12">
            <h4 class="pt-3 text-light"><br>About Us</br></h4>
            <a href="pagenotfound.html" class="text-muted">Our Company</a>
            <a href="pagenotfound.html" class="text-muted"><br>Careers</br></a>
            <a href="pagenotfound.html" class="text-muted">Privacy Policy</a>
            <a href="pagenotfound.html" class="text-muted"><br>Terms of Use</br></a>
          </div>

          <div class="bottom right mx-auto">
            <div class="logo">   <a href="index.html"> <img src="../img/logotrans.png" width="382.875" height = "144.375" alt=""></a></div>
          </div>

        </div>
      </div>
      <div class="text-center">
        <a class = "pt-2 text-muted" style="display: inline-block;">
          Copyright @2022 All rights reserved Soenify </a>
      </div>
    </div>
  </footer>
  <!--End of footer-->
    <script src="../js/script.js"></script>
  </body>
</html>
