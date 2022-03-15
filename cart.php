<?php include "../header.php";?>
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
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="../img/Airpods1.jpg" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity">1</span> Airpods 3rd generation</strong> Apple</h1>
            <p><strong>Graved</strong></p>
          </div>
        </div>
        <div class="price">210.99</div>
        <div class="quantity">
          <input type="number" value="1" min="1" class="quantity-field">
        </div>
        <div class="subtotal">210.99</div>
        <div class="remove">
          <button>Remove</button>
        </div>
      </div>
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="../img/Lipstick1.jpg" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity">2</span> Magenta color Lipstick</strong> NYX </h1>
            <p><strong>Matt</strong></p>
          </div>
        </div>
        <div class="price">9.99</div>
        <div class="quantity">
          <input type="number" value="1" min="1" class="quantity-field">
        </div>
        <div class="subtotal">9.99</div>
        <div class="remove">
          <button>Remove</button>
        </div>
      </div>
    <div class="basket-product">
      <div class="item">
        <div class="product-image">
          <img src="../img/Blanket2.jpeg" alt="Placholder Image 2" class="product-frame">
        </div>
        <div class="product-details">
          <h1><strong><span class="item-quantity">1</span> Soft fluffy blanket</strong> Queen & King</h1>
          <p><strong>blue</strong></p>
        </div>
      </div>
      <div class="price">20.99</div>
      <div class="quantity">
        <input type="number" value="1" min="1" class="quantity-field">
      </div>
      <div class="subtotal">20.99</div>
      <div class="remove">
        <button>Remove</button>
      </div>
    </div>
    <br/>

    <div class="basket-module">
      <label for="promo-code">Add a promo code</label>
      <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
      <button class="promo-code-cta">Apply</button>
    </div>
  </div>
    <aside>
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
         <a href="../src/checkout.html"> <button class="checkout-cta">Continue Checkout</button></a>
        </div>
      </div>
    </aside>
  </main>
   

<!--Link to JS-->
<script src="../js/cart.js"></script>
<?php include "../footer.php";?>