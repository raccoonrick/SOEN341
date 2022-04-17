<?php include "header.php";?>
    <link rel = "stylesheet" href="css/checkout.css">
     <!--ICONS-->
   <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
   <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  

   <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="/addorder.php">
        
          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Patrick le blanche">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="leblanche@gmail.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="231 rue decarie">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="Montreal">
  
              <div class="row">
                <div class="col-50">
                  <label for="province">Province</label>
                  <input type="text" id="province" name="province" placeholder="QC">
                </div>
                <div class="col-50">
                  <label for="postal code">Postal Code</label>
                  <input type="text" id="postal code" name="postal code" placeholder="H6M 3O9">
                </div>
              </div>
            </div>
  
            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="Patrick le blanche">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="2222-3333-4444-5555">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="08">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2020">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="399">
                </div>
              </div>
            </div>
            
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
        
      </div>
       <br/>
        <input type="submit" value="Place order" class="btn">
    </div>
    </form>
</div>
  
<?php include "footer.php";?>
