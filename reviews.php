<?php
include "config.php";
//Function to display the rating on the page
function displayStars ($stars,$total){
    if($stars > 0){
        echo '<div class="product-rating">';
        for($i = 0; $i < round($stars);$i++){
            echo '<i class="fas fa-star"></i>';
        }
        echo '<span>' . number_format((float)$stars, 1, '.', '') . '('. $total . ')</span>';
        echo '</div>';
    }
}
//Function to check if user has purchased the product
function purchasedProduct($itemid){
    include "config.php";
    $purchased = false;
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        //Get order ids with item 
        $orders = array();
        $sql = $link->prepare("SELECT orderid from order_items where itemid = ?");
        $sql->bind_param("i",$itemid);
        $sql->execute();
        $order_ids = $sql->get_result();

        if($order_ids->num_rows > 0){
            while($row = $order_ids->fetch_assoc()){
                array_push($orders,$row["orderid"]);
            }
        }

        //Check if one of the orders is from the user
        foreach($orders as $order){
            $sql = $link->prepare("SELECT userid from orders where orderid = ?");
            $sql->bind_param("i",$order);
            $sql->execute();
            $user_orders = $sql->get_result();
            if($user_orders->num_rows > 0){
                while($row = $user_orders->fetch_assoc()){
                    if($_SESSION["userid"] == $row["userid"]){
                        $purchased = true;
                        break 2;
                    }
                }
            }
        }

    }
    return $purchased;
}

//Function to get the name of the user
function getUserName($userid){
    include "config.php";
    $name = "";
    $sql = $link->prepare("SELECT username FROM users WHERE id = ?");
    $sql->bind_param("i",$userid);
    $sql->execute();
    $result = $sql->get_result();
    $row = $result->fetch_assoc();
    $name = $row["username"];
    return $name;
}


//Get total number of ratings
$sql_total = $link->prepare("SELECT count(rating) as TOTAL from reviews where product_id = ?");
$sql_total->bind_param("i",$itemid);
$sql_total->execute();
$sql_result = $sql_total->get_result();

if($sql_result->num_rows > 0){
    while($row = $sql_result->fetch_assoc()){
        $num_ratings = $row["TOTAL"];
    }
}
else {
    $num_ratings = 0;
}
//Get avg rating for product
if($num_ratings > 0){
    $sql_stars = $link->prepare("SELECT AVG(rating) as AVGRATE from reviews where product_id = ?");
    $sql_stars->bind_param("i",$itemid);
    $sql_stars->execute();
    $sql_result = $sql_stars->get_result();


    //Check if there's any reviews
    if($sql_result->num_rows > 0){
        while($row = $sql_result->fetch_assoc()){
            $num_stars = $row["AVGRATE"];
        }
    }
    else {
        $num_stars = 0;
    }
}
else{
    $num_stars = 0;
}

//Get ratings and reviews for the product
$reviews = array();
$sql_reviews = $link->prepare("SELECT user_id, comment, rating from reviews where product_id = ?");
$sql_reviews->bind_param("i",$itemid);
$sql_reviews->execute();
$reviews = $sql_reviews->get_result();

$link->close();
?>