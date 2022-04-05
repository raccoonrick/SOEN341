<?php
//Check if session is started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
//Check if user is an admin, redirect to another page if necessary
if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true){
  echo '<script>alert("Admin Log in")</script>';
}
include "header.php";
?>
<link rel =  "stylesheet" href = "../css/index.css">
<div class="container text-center">
     <div class="row">
         <div class="col-md-7 col-sm-12">
             <h6>@ Soenify</h6>
             <h1>For a Better Online Shopping Experience</h1>
             <p>
                 Shopping with us will give you the best experience. 
                 All our products are brand-new and unique.
                 Shop with us and don't miss out!!
             </p>
         </div>
         <div class="col-md-5 col-sm-12 h-25" style="padding-top: 50px;">
             <img src ="../img/cartindexpage.png" alt="Soenify" width = "400" height = "300" />
        </div>
     </div>
 </div>


   <section class = "section-1 container-fluid p-0">
       <div class = "cover">
           <div class="content text-center">
               <h1>What makes us Unique</h1>
               <p>
                No more rushing to the markets and stores. Our items are sealed and delivered straight to your door.
                You have everything you need at all times.
               </p>
           </div>
       </div>
 <div class="container-fluid-text-center">
     <div class = "numbers d-flex flex-md-row flex-wrap justify-content-center">
         <div class="rect">
             <h1>1500</h1>
        <p>Satisfied customers</p>
         </div>
         <div class="rect">
            <h1>2300</h1>
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
<div class="platform-row" >
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
</div>
    <div class="platform-row">
    <div class="col-md-6 col-sm-12 text-left">
        <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center flex-fill">
                <i class="fas fa-mobile-alt fa-3x py-2 pr-3"></i>
                <div class="text text-left" >
                    <h3 class ="pt-1 m-0">Mobile App</h3>
                    <p class ="p-0 m-0"> On play/app store</p>
                </div>
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
                    <a href="../pagenotfound.php" class="text-muted">Help</a>
                    <a href="../pagenotfound.php" class="text-muted"><br>Product Recalls</br></a>
                    <a href="../pagenotfound.php" class="text-muted">Shipping & Returns</a>
                    <a href="../pagenotfound.php" class="text-muted"><br>Contact Us</br></a>
                </div>
                <div class="col-md-3 col-sm-12">
                    <h4 class="pt-3 text-light"><br>About Us</br></h4>
                    <a href="../pagenotfound.php" class="text-muted">Our Company</a>
                    <a href="../pagenotfound.php" class="text-muted"><br>Careers</br></a>
                    <a href="../pagenotfound.php" class="text-muted">Privacy Policy</a>
                    <a href="../pagenotfound.php" class="text-muted"><br>Terms of Use</br></a>
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

<script src="js/jquery-3.0.0.min.js"></script>

</body>
</html>