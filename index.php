<?php
session_start();
//Check if user is an admin, redirect to another page if necessary
if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true){
  echo '<script>alert("Admin Log in")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soenify</title>
   <link rel="icon" href="img/Icon.jpg" type="image/icon type">
    <!----CSS and Bootstrap style---->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e6f61e0e67.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel =  "stylesheet" href = "css/style.css">

</head>

<body>
 <header>
 <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg">
      <div class="logo">   <a href="/"> <img src="assets/img/logo.png" width="90" height = "80" >Soenify</a></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class = "mr-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                  <div class="dropdown">
                      <a href="#" class="nav-link">Categories</a>
                      <div class="dropdown-content">
                          <a href="#">Electronics</a>
                          <a href="#">Home Goods</a>
                          <a href="#">Toys </a>
                      </div>
                  </div> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cart</a>
              </li>
              <li class="nav-item">
                <?php
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                  echo "<a class=\"nav-link\" href=\"login.php\">Login</a>";
                }
                else{
                  echo "<a class=\"nav-link\" href=\"logout.php\">Logout</a>";
                }

                ?>
                <!-- <a class="nav-link" href="login.php">Login</a> -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
 </div>
 <div class="container text-center">
     <div class="row">
         <div class="col-md-7 col-sm-12">
             <h6>@ Soenify</h6>
             <h1>For a better Online Shopping</h1>
             <p>
                 Shopping with us will give the user the best experience. 
                 All our products are brand-new and unique.
                 Shop with us and don't miss out !!
             </p>
         </div>
         <div class="col-md-5 col-sm-12 h-25">
             <img src ="assets/img/shop.jpg" alt="Soenify" width = "200" height = "300" />   
        </div>
     </div>
 </div>
 </header>
 <main>
   <section class = "section-1 container-fluid p-0">
       <div class = "cover">
           <div class="content text-center">
               <h1>What made us Unique</h1>
               <p>
                No more rushing to markets and stores. Our items are sealed and delivered straight to your door.
                You have everything you need at all times.
               </p>
           </div>
       </div>
 <div class="containter-fluid-text-center">
     <div class = "numbers d-flex flex-md-row flex-wrap justify-content-center">
         <div class="rect">
             <h1>6000</h1>
        <p>Satisfied customers</p>
         </div>
         <div class="rect">
            <h1>5500</h1>
       <p>Purchases</p>
        </div>
     </div>
</div>
<div class="platform row">
   <div class = "col-md-6 col-sm-12 text-right">
       <div class ="desktop shadow-lg">

       </div>
   </div>

</div>
</section>

<section class = "section-2 container-fluid p-0 text-center">
<div class="row">
    <div class= "col-md-12 col-sm-12">
        <h1>Download our App on all Platforms</h1>
        <p> Soenify is available on all platforms. Make sure to download and register</p>
    </div>
</div>
<div class="platform row">
    <div class="col-md-6 col-sm-12 text-right">
        <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
                <i class="fas fa-desktop fa-3x py-2 pr-3"></i>
                <div class="text text-left">
                    <h3 class ="pt-1 m-0">Desktop</h3>
                    <p class ="p-0 m-0"> On Website</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 text-left">
        <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
                <i class="fas fa-mobile-alt fa-3x py-2 pr-3"></i>
                <div class="text text-left">
                    <h3 class ="pt-1 m-0">Mobile App</h3>
                    <p class ="p-0 m-0"> On play/app store</p>
                </div>
            </div>
        </div>
</div>
</section>
 </main>

 <footer>
 <div class="container-fluid p-0">
     <div class="row text-left">
         <div class="col-md-5 col-md-5"> 
             <h4 class="text-dark">About Us</h4>
             <p class = "text-muted">
               Soenify is an e-commerce website. It will include many features and products.
               The team is available 24/7 for any occurring issues.
             </p>
             <p class = "pt-4 text-muted">
                 Copyright @2022 All rights are reserved by Soenify
             </p>
         </div>

         <div class="col-md-5 col-sm-12">
            <h4 class="text-dark">Newsletter</h4>
            <p class="text-muted">Stay Up to date</p>
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
            </div>

         <div class="col-md-2 col-sm-12">
            <h4 class="text-dark">Follow Us</h4>
            <p class="text-muted">Let us keep in contact</p>
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
 </div>
 </footer>

<script src="js/jquery-3.0.0.min.js"></script>

</body>
</html>