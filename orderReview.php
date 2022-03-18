<?php include "header.php";?>
    <link rel = "stylesheet" href="css/order.css">

   <div class="container">
       <div class="row">
           <div class="col-md-3">
               <div class="osahan-account-page-left shadow-sm bg-white h-100">
                   <div class="border-bottom p-4">
                       <div class="osahan-user text-center">
                           <div class="osahan-user-media">
                            <div class="avatar">
                                <span class="avatar-text avatar-text-primary rounded-circle"><span class="initial-wrap"><span>DS</span></span>
                                </span>
                            </div>
                               <div class="osahan-user-media-body">
                                   <h6 class="mb-2">Daniella Sargi</h6>
                                   <p class="mb-1">+514-983-3383</p>
                                   <p>sargid@gmail.com</p>
                                   <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#edit-profile-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
                       <li class="nav-item">
                           <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="icofont-food-cart"></i> Orders</a>
                       </li>
                   </ul>
               </div>
           </div>
           <div class="col-md-9">
               <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                   <div class="tab-content" id="myTabContent">
                       <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                           <h4 class="font-weight-bold mt-0 mb-4">Order History</h4>
                           <div class="bg-white card mb-4 order-list shadow-sm">
                               <div class="gold-members p-4">
                                   <a href="#">
                                   </a>
                                   <div class="media">
                                       <a href="#">
                                           <img class="mr-4" src="../img/Bottle1.jpg" alt="Generic placeholder image">
                                       </a>
                                       <div class="media-body">
                                           <a href="#">
                                               <span class="float-right text-info">Delivered on Sun, Jan 02, 10:00 AM <i class="icofont-check-circled text-success"></i></span>
                                           </a>
                                           <h6 class="mb-2">
                                               <a href="#"></a>
                                               <a href="#" class="text-black">Under Amour water bottle</a>
                                           </h6>
                                           <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 1290 boul. cote vertu, Saint laurent, QC, H2M 3A9
                                           </p>
                                           <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #199232123 <i class="icofont-clock-time ml-2"></i> Ordered on Wed, Dec 29, 5:30 PM</p>
                                           <hr>
                                           <div class="float-right">
                                               <a class="btn btn-sm btn-secondary" href="#"><i class="icofont-refresh"></i> Re-order</a>
                                           </div>
                                           <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span> $12.99
                                           </p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="bg-white card mb-4 order-list shadow-sm">
                               <div class="gold-members p-4">
                                   <a href="#">
                                   </a>
                                   <div class="media">
                                       <a href="#">
                                           <img class="mr-4" src="../img/Eyeshadow1.jpg" alt="Generic placeholder image">
                                       </a>
                                       <div class="media-body">
                                           <a href="#">
                                               <span class="float-right text-info">Delivered on Fri Feb 25, 7:00 PM <i class="icofont-check-circled text-success"></i></span>
                                           </a>
                                           <h6 class="mb-2">
                                               <a href="#"></a>
                                               <a href="#" class="text-black"> NYX Eyeshadow Palette</a>
                                           </h6>
                                           <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 1290 boul. cote vertu, Saint laurent, QC, H2M 3A9
                                           </p>
                                           <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #34890012 <i class="icofont-clock-time ml-2"></i> Ordered on Mon, Feb 21, 11:00 PM</p>
                                           <hr>
                                           <div class="float-right">
                                               <a class="btn btn-sm btn-secondary" href="#"><i class="icofont-refresh"></i> Re-order</a>
                                           </div>
                                           <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span> $6.49
                                           </p>
                                       </div>
                                   </div>
                               </div>
                               
                           </div>
                           <div class="bg-white card mb-4 order-list shadow-sm">
                               <div class="gold-members p-4">
                                   <a href="#">
                                   </a>
                                   <div class="media">
                                       <a href="#">
                                           <img class="mr-4" src="../img/Bottle1.jpg" alt="Generic placeholder image">
                                       </a>
                                       <div class="media-body">
                                           <a href="#">  <?php
      
                                             if(isset($_POST['cancel'])) 
                                               echo'
                                               <span class="float-right text-info">Order Canceled<i class="icofont-check-circled text-success"></i></span>';
                                             
                                               ?>
                                           </a>
                                           <h6 class="mb-2">
                                               <a href="#"></a>
                                               <a href="#" class="text-black">Under Amour water bottle</a>
                                           </h6>
                                           <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 1290 boul. cote vertu, Saint laurent, QC, H2M 3A9
                                           </p>
                                           <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #199232123 <i class="icofont-clock-time ml-2"></i> Ordered on Wed, Dec 29, 5:30 PM</p>
                                           <hr>
                                           
                                           <div class="float-right">
                                               <?php
      
                                             if(isset($_POST['cancel'])) {
                                               echo'<a class="btn btn-sm btn-secondary" href="#"><i class="icofont-refresh"></i> Re-Order</a>';
                                             }
                                             else
                                               echo'  <a class="btn btn-sm btn-secondary" href="#"><i class="icofont-refresh"></i> View</a>
                                               <a class="btn btn-sm btn-secondary" href="./cancel.php"><i class="icofont-refresh"></i> Cancel Order</a>';
                                             ?>
                                                
                                           </div>
                                           <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span> $12.99
                                           </p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <?php include "./footer.php";?>