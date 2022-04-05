<?php
include "header.php";
include "config.php";
if(isset($_SERVER["REQUEST_METHOD"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Insert review into database
        $comment = $_POST["comment"];
        $itemid = $_POST["itemid"];
        $rating = $_POST["rating"];
        $userid = $_SESSION["userid"];

        $review = $link->prepare("INSERT INTO reviews (user_id,product_id,comment,rating) VALUES (?,?,?,?)");
        $review->bind_param("iisi",$userid,$itemid,$comment,$rating);
        $review->execute();
      }
    }
$link->close();
?>
<!-- Display review message -->
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                    Added review to product!
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