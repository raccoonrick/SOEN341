<?php

include "header.php";

include "config.php";
$userid = $_SESSION["userid"];

//Add order to db
$order = $link->prepare("INSERT INTO orders (userid) VALUES (?)");
$order->bind_param("i",$userid);
$order->execute();

//Get order id
$stmt ="SELECT orderid FROM orders ORDER BY orderid DESC LIMIT 1";
$result = $link->query($stmt);

// GET latest order id
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        $orderid = $row["orderid"];
      }
}

// Add items to db
for($i = 0; $i < sizeof($_SESSION["cartItems"]); $i++){
    $itemid = $_SESSION["cartItems"][$i]["itemid"];
    $qty = $_SESSION["cartItems"][$i]["qty"];
    if($qty > 0){
        $stmt = $link->prepare("INSERT INTO order_items (orderid, itemid, qty) VALUES (?,?,?)");
        $stmt->bind_param("iii",$orderid,$itemid,$qty);
        $stmt->execute();
    }

    
    
}

$link->close();

?>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                    Order successful!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php
include "footer.php";

?>
