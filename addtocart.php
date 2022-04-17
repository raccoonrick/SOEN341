<?php

function checkValidQuantity($qty){
  if ($qty >= 0){
    return true;
  }
  else return false;
}

function checkifInCart($itemid){
  if(isset($_SESSION['cartItems'])){
    for($i = 0; $i < sizeof($_SESSION['cartItems']); $i++){       //MAKE SURE ITEMS DONT APPEAR TWICE IN CART
      if($_SESSION['cartItems'][$i]["itemid"] == $itemid){
          $_SESSION['cartItems'][$i]["qty"] += $qty;
          return true;
          echo '<script>alert("Added '.$qty.' item(s) to the cart.")</script>';
      }
    }
  }
  return false;
}


if(isset($_SERVER["REQUEST_METHOD"])){
  if($_SERVER["REQUEST_METHOD"] == "POST"){

      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        echo '<script>alert("Please log in before adding to cart.")</script>';
      }
      else{
        // echo '<script>alert("Yo.")</script>';
        $username = $_SESSION['username'];
        $userid = $_SESSION['userid'];
        $qty = $_POST['quantity'];

        $alreadyInCart = checkifInCart($itemid);
      if(!$alreadyInCart){
        //Organize product into array to put into the session variable
        $product = array("qty"=>"$qty","itemid"=>"$itemid");
        //Add to cartItems array
        if(!isset($_SESSION["cartItems"])){
            $_SESSION["cartItems"] = array($product);
        }
        else{
            array_push($_SESSION["cartItems"],$product);
        }
        echo '<script>alert("Added '.$qty.' item(s) to the cart.")</script>';
        }
      }
    }
  }
?>
