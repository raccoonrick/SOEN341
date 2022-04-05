<?php
include_once "header.php";
//Check if user is logged in first, else warn user 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo '<script>alert("Please log in first.");</script>';
    die();
}

?>
<link rel="stylesheet" href="../css/cartStyle.css">

  <main>
  <form action="" method="post">
    <div class="basket">
      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Price</li>
          <li class="quantity">Quantity</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>
      <?php
      //Get items from user's cart
      $subtotal_all = 0;
      //Check if anything was removed
      if(isset($_GET["id_delete"])){
        for($i = 0; $i < sizeof($_SESSION["cartItems"]); $i++){
          if($_SESSION["cartItems"][$i]["itemid"] == $_GET["id_delete"]){
            $_SESSION["cartItems"][$i]["qty"] = 0;
          }
        }
      }
      //Check if anything was updated
      foreach($_POST as $k => $v){
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
          $itemid = str_replace('quantity-', '', $k);
          // abs() function will prevent minus quantity and (int) will make sure the number is an integer
          $qty = abs((int)$v);
            if($qty > 0){
            for($i = 0; $i < sizeof($_SESSION["cartItems"]); $i++){
              if($_SESSION["cartItems"][$i]["itemid"] == $itemid){
                $_SESSION["cartItems"][$i]["qty"] = $qty;
              }
            }
          }
      }
      }
      if(isset($_SESSION["cartItems"])){
        for($i=0; $i < sizeof($_SESSION["cartItems"]); $i++){
          $itemid = $_SESSION["cartItems"][$i]["itemid"];
          $qty = $_SESSION["cartItems"][$i]["qty"];
          // Get product information from database
          if($qty > 0){
          $prod_info = $link->prepare("SELECT product_name, product_price, product_onsale, product_saleprice, product_img FROM products WHERE id = ?");
          $prod_info->bind_param("i",$itemid);
          $prod_info->execute();
          $prod_result = $prod_info->get_result();
            if ($result->num_rows > 0) {
              while($row = $prod_result->fetch_assoc()) {
                //Display each product
                $images = explode("|",$row["product_img"]);
                if ($row["product_onsale"] == 1){
                  $subtotal = $qty * $row["product_saleprice"];
                }
                else{
                  $subtotal = $qty * $row["product_price"];
                }
                $subtotal_all += $subtotal;
                $txt = '<div class="basket-product">
                <div class="item">
                  <div class="product-image">
                    <img src="../img/' . $images[0] . '" alt="Placholder Image 2" class="product-frame">
                  </div>
                  <div class="product-details">
                    <h1><strong><span class="item-quantity"> </span>' . $row["product_name"] . '</strong></h1>
                  </div>
                </div>
                <div class="price">';
                if($row["product_onsale"] == 1){
                  $txt = $txt . $row["product_saleprice"];
                }
                else{
                  $txt = $txt . $row["product_price"];
                }
                
                $txt = $txt . '</div>
                <div class="quantity">
                  <input type="number" name="quantity-'.$itemid .'" value="' . $qty .'" min="1" class="quantity-field">
                </div>
                <div class="subtotal">'. $subtotal . '</div>
                <div class="remove">
                  <button><a href="cart.php?id_delete= '. $itemid . '">Remove</a></button>
                </div>
              </div>
                ';
              echo $txt;
              }
              }
        }
      }
      }
      // Reformat numbers
      $qst = number_format($subtotal_all * 0.09975,2,"."," ");
      $gst = number_format($subtotal_all * 0.05,2,"."," ");
      $link->close();
      ?>
    </div>
    </form>
    <br/>

    <aside>
    <div class="basket-module">
      <label for="promo-code">Add a promo code</label>
      <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
      <button class="promo-code-cta">Apply</button>
    </div>
  </div>
  </form>
    <!-- <aside> -->
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Checkout Summary</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal"><?php echo $subtotal_all;?></div>
          <div class="subtotal-title">QST</div>
          <div class="subtotal-value final-value" id="basket-subtotal"><?php echo $qst;?></div>
          <div class="subtotal-title">GST</div>
          <div class="subtotal-value final-value" id="basket-subtotal"><?php echo $gst;?></div>
          <div class="subtotal-title">Shipping fees</div>
          <div class="subtotal-value final-value" id="basket-subtotal"><?php echo $subtotal_all + $qst + $gst;?></div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
        <div class="summary-delivery">
          <select name="delivery-collection" class="summary-delivery-selection">
              <option value="0" selected="selected">Select a Delivery method</option>
             <option value="first-class">Delivery to your house</option>
             <option value="second-class">Delivery to the nearest post office</option>
          </select>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total">285.20</div>
        </div>
        <div class="summary-checkout">
         <a href="checkout.php"> <button class="checkout-cta">Continue Checkout</button></a>
        </div>
      </div>
    </aside>
  </main>
   

<?php include "footer.php";?>