<?php include 'header.php';
require_once 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $product_name=$product_info=$product_category=$errmsg  = '';
    $product_onsale=$product_saleprice=$product_price = 0;

    if(!empty(trim($_POST["product_name"]))){
        $product_name = $_POST['product_name'];
    }
    else{
        $errmsg = $errmsg . "Please provide a name.<br>";
    }

    if(!empty(trim($_POST["product_info"]))){
        $product_info = $_POST['product_info'];
    }
    else{
        $errmsg = $errmsg . "Please provide a description.<br>";
    }
    
    if(!empty(trim($_POST["product_category"]))){
        $product_category = $_POST['product_category'];
    }
    else{
        $errmsg = $errmsg . "Please choose a category.<br>";
    }
    if(!empty(trim($_POST["product_price"]))){
        $product_price = $_POST['product_price'];
    }
    else{
        $errmsg = $errmsg . "Please choose a price.<br>";
    }

    if(!empty(trim($_POST["product_onsale"]))){
        $product_onsale  = 1;
    }
    else{
        $product_onsale = 0;
    }
    if(empty(trim($_POST["product_saleprice"])) && $product_onsale == 1){
        $errmsg = $errmsg . "Please choose a sale price.<br>";
    }
    else{
        $product_saleprice = $_POST["product_saleprice"];
    }
    //Verify image

    if(empty($errmsg)){

        $dir = "img/";
        $product_img = basename($_FILES["product_img"]["name"]);
        $target_file = $dir . basename($_FILES["product_img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["product_img"]["tmp_name"]);
        if($check !== false) {
            // "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $errmsg = $errmsg . "File is not an image.<br>" . $imageFileType . "<br>";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            $errmsg = $errmsg . "Sorry, file already exists.<br>";
            $uploadOk = 0;
          }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            $errmsg = $errmsg . "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
            $uploadOk = 0;
            }

        if ($uploadOk == 0){
            $errmsg = $errmsg . "Image not uploaded.<br>";
        }
        else{
            if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) {
                // $errmsg = $errmsg .  "The file ". htmlspecialchars( basename( $_FILES["product_img"]["name"])). " has been uploaded.";
            } else {
                $errmsg = $errmsg .  "Sorry, there was an error uploading your file.";
            }
        }
    }

    //Attempt to insert into db
    // if(empty($errmsg)){
    //     $errmsg = "Everything works prior the db.";
    // }
    // $errmsg = "ASDASD";
    if(empty($errmsg)){
        $sql = "SELECT id FROM products WHERE product_name = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_name);

            $param_name = $product_name;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                //Check if product already exists
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $errmsg = $errmsg . "This product already exists<br>";
                } else{
                    $name = $product_name;
                }
            }
            mysqli_stmt_close($stmt);
        }
        

        $sql = "INSERT INTO products (product_name, product_info, product_category, product_price, product_onsale, product_saleprice,"
        . "product_img, product_link) VALUES (?,?,?,?,?,?,?,?)";
        if($stmt = mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt,"sssdidss",$param_name,$param_info,$param_cat,$param_price,$param_onsale,$param_saleprice,$param_img,$param_link);

            $param_name = $name;
            $param_info = $product_info;
            $param_cat = $product_category;
            $param_price = $product_price;
            $param_onsale = $product_onsale;
            $param_saleprice = $product_saleprice;
            $param_img = $product_img;
            $param_link = $product_name . ".php";
            if(mysqli_stmt_execute($stmt)){
                echo "SUCCESS";
            }
            else{
                $errmsg = "This product already exists.<br>";
                unlink($target_file);
            }
            mysqli_close($stmt);
        }
        $stmt = $link->prepare("SELECT id FROM products WHERE product_name = ?");
        $stmt->bind_param("i",$name);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $id = $row["id"];
          }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);
    }

    //Create the appropriate product page
    if(empty($errmsg)){
        $product_file = "products/" . $param_link;
        $myfile = fopen($product_file,"w") or die("Unable to open file!");

        $txt = '<?php include "../header.php";?>
        <link rel="stylesheet" href="../css/style.css" />
        <?php 

        //Info for products
        $itemid = ' . $id . ';
        //Add to cart functionality
        include "../addtocart.php";

        ?>
        
            <div class="card-wrapper">
              <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                  <div class="img-display">
                    <div class="img-showcase">
                      <img src="../img/' . $product_img .'" alt="Stock image" />
                    </div>
                  </div>
                  <div class="img-select">
                    <div class="img-item">
                      <a href="#" data-id="1">
                        <img src="../img/'. $product_img .'" alt="Stack image" />
                      </a>
                    </div>
                  </div>
                </div>
                <!-- card right -->
                <div class="product-content">
                  <h2 class="product-title">'. $product_name . '</h2>
                  <a href="#" class="product-link">visity Soenify</a>
                  <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>4.7(21)</span>
                  </div>
                  <div class="product-price">';
                  if($product_onsale == 1){
                      $txt = $txt . '<p class="last-price">Old Price: 
                      <span>$' . $product_price . '</span></p>
                      <p class="new-price">New Price: <span>$' . $product_saleprice . '</span></p>';
                  }
                  else{
                      $txt = $txt . '<p class="new-price">Price: <span>$'. $product_price .'</span></p>';
                  }
                  $txt = $txt .'
                  </div>
        
                  <div class="accordian">
                    <button class = "btn btn-outline-secondary" onclick="displayText()" for= "title1"> More Description</button>
                          <p id="description-text" style="display:none;"> <br/>
                          ' . $product_info . '
                    Available: <span>in stock</span><br>
                    Category: <span> ' . $product_category . '</span>
                  
                  </p>
                </div>
                    
                  <div class="purchase-info">
                    <form action="' . $param_link . '" method="post" enctype="multipart/form-data">
                      <input type="number" name="quantity" min="0" value="1" />
                      <button type="submit" class="btn add-cart">
                      Add to Cart<i class="fas fa-shopping-cart"></i>
                      </button>
                    </form>
                  </div>
        
                  <div class="social-links">
                    <p>Share At:</p>
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-pinterest"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <?php include "../footer.php";?>';
        fwrite($myfile,$txt);

        fclose($myfile);
    }
}

?>
 <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                    <?php
                        if(empty($errmsg)){
                            echo "Product Successfully Added!";
                        }
                        else{
                            // echo $product_img;
                            echo $errmsg;
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
include 'footer.php';
?>