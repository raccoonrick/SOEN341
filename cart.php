<?php include "header.php";?>
<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("Location: login.php");
}
?>
<link rel="stylesheet" href="../css/cartStyle.css">
  <main>
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
        include "config.php";
        $items = array();
        $userid = $_SESSION['userid'];
        $stmt = $link->prepare("SELECT itemid, itemquantity FROM cart WHERE userid = ?");
        $stmt->bind_param("i",$userid);

        $stmt->execute();

        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $items[$row["itemid"]] = $row["itemquantity"];
            // echo $items[$row["itemid"]] . " items <br>";
          }
        }
        foreach ($items as $itemid => $qty){
          // echo $itemid . "=>" . $qty . "<br>";
          if($qty > 0){
            $prod_info = $link->prepare("SELECT product_name, product_price, product_onsale, product_saleprice, product_img FROM products WHERE id = ?");
            $prod_info->bind_param("i",$itemid);
            $prod_info->execute();
            $prod_result = $prod_info->get_result();
            // echo "Yo <br>";
            if ($result->num_rows > 0) {
              // echo "Hello <br>";
              while($row = $prod_result->fetch_assoc()) {
                // echo " Steven <br>";
                $images = explode("|",$row["product_img"]);
                if ($row["product_onsale"] == 1){
                  $subtotal = $qty * $row["product_saleprice"];
                }
                else{
                  $subtotal = $qty * $row["product_price"];
                }
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
                  <input type="number" value="' . $qty .'" min="1" class="quantity-field">
                </div>
                <div class="subtotal">'. $subtotal . '</div>
                <div class="remove">
                  <button>Remove</button>
                </div>
              </div>
                ';
              echo $txt;
              }
            }

          }
        }
        $link->close();
      ?>
    </div>
    <br/>


    <div class="basket-module">
      <label for="promo-code">Add a promo code</label>
      <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
      <button class="promo-code-cta">Apply</button>
    </div>
  </div>
    <!-- <aside> -->
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Checkout Summary</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal">251.96</div>
          <div class="subtotal-title">QST</div>
          <div class="subtotal-value final-value" id="basket-subtotal"> 0.09975</div>
          <div class="subtotal-title">GST</div>
          <div class="subtotal-value final-value" id="basket-subtotal">0.05</div>
          <div class="subtotal-title">Shipping fees</div>
          <div class="subtotal-value final-value" id="basket-subtotal">6.99</div>
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
    <!-- </aside> -->
  </main>
   

<!--Link to JS-->
<!-- <script src="../js/cart.js"></script>
<script src="../js/jquery-3.0.0.min.js"></script> -->
<?php include "footer.php";?>