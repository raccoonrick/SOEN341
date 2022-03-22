<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      echo '<script>alert("Please log in before adding to cart.")</script>';
    }
    else{
      // echo '<script>alert("Yo.")</script>';
      $username = $_SESSION['username'];
      $userid = $_SESSION['userid'];
      $qty = $_POST['quantity'];

      $alreadyInCart = false;
      if(isset($_SESSION['cartItems'])){
          for($i = 0; $i < sizeof($_SESSION['cartItems']); $i++){       //MAKE SURE ITEMS DONT APPEAR TWICE IN CART
            if($_SESSION['cartItems'][$i]["itemid"] == $itemid){
                $_SESSION['cartItems'][$i]["qty"] += $qty;
                $alreadyInCart = true;
                echo '<script>alert("Added '.$qty.' item(s) to the cart.")</script>';
            }
      }
    }
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
      // require_once "../config.php";
      // $productexists = false;
  
      // //Check if user already has item in cart, update quantity instead, else add to cart
      
      // //Connect to sql server
      // //-------------TEST-------------
      // $stmt = $link->prepare("SELECT itemquantity FROM cart WHERE userid = ? AND itemid = ?");
      // $stmt->bind_param("ii",$userid,$itemid);
  
      // $stmt->execute();
  
      // $result = $stmt->get_result();
      // if ($result->num_rows > 0) {
      //   $productexists = true;
      //   while($row = $result->fetch_assoc()) {
      //     $oldqty = $row["itemquantity"];
      //   }
      // } 
      
      // // echo $result;
  
  
      // //-------------TEST-------------
  
  
      // // //Either add to table or update value in table
      // if($productexists){
      //   $newqty = $oldqty + $quantity;
      //   $sql = "UPDATE cart SET itemquantity = ? WHERE userid = ? AND itemid = ?";
      //   if($stmt = mysqli_prepare($link,$sql)){
      //     mysqli_stmt_bind_param($stmt, "iii",$newqty,$userid,$itemid);
      //     if(mysqli_stmt_execute($stmt)){
      //       echo '<script>alert("Added '.$quantity.' items to the cart. EXISTS ALREADY")</script>';
      //     }
      //     else{
      //       echo '<script>alert("Something went wrong. Please try again later.")</script>';
      //     }
      //   }
      //   mysqli_stmt_close($stmt);
      // }
      // else{
      //   $sql = "INSERT INTO cart (userid, itemid, itemquantity) VALUES (?,?,?)";
      //   if($stmt = mysqli_prepare($link, $sql)){
      //     mysqli_stmt_bind_param($stmt,"iii",$userid,$itemid,$quantity);
      //     if(mysqli_stmt_execute($stmt)){
      //       echo '<script>alert("Added '.$quantity.' item(s) to the cart.")</script>';
      //     }
      //     else{
      //       echo '<script>alert("Something went wrong. Please try again later.")</script>';
      //     }
      //   }
      //   mysqli_stmt_close($stmt);
      // }
      // // mysqli_close($link);
      // $link->close();
    }
  }
?>