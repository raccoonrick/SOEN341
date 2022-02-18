<?php
session_start();
//Check if user is an admin, redirect to another page if necessary
if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true){
  echo '<script>alert("Admin Log in")</script>';
}
include "header.php";
?>
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
             <img src ="img/shop.jpg" alt="Soenify" width = "200" height = "300" />   
        </div>
     </div>
 </div>
 </header>
 <main>
   <section class = "section-1 container-fluid p-0">
       <div class = "cover">
           <div class="content text-center">
               <h1>What makes us Unique</h1>
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
<?php include "footer.php"?>