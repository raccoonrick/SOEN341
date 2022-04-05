<?php
//Check if session is started
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once "config.php";
include "header.php";
?>

<link rel =  "stylesheet" href = "../css/categories.css">
<body>
    <div class="card-deck">

        <h1 style="text-align: center; color: white; width: 100%; font-size: 6rem">DEPARTMENTS</h1>
    
        <a id="aisles"></a>
        <div class="row">
          <?php
          //Get category names from database
          $sql = "SELECT * FROM categories";
          $result = $link->query($sql);
          
          if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                //Display categories on page
                echo "<div class='col-lg-4 col-md-6'>";
                echo "<a href='categories/" . $row["cat_link"] . "'>";
                echo "<div class='card'>";
                echo "<img class='card-img-top' src='img/" . $row["cat_img"] . "' alt='Card image cap'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title' style='text-align: center; font-size: x-large;'>" . $row["cat_name"] . "</h5>";
                echo "</div>";
                echo "</div>";
                echo "</a>";
                echo "</div>";
              }
          }

          ?>
        </div>
        </div>
      </div>
      <br/> 
      <div class="text-center" >
      </div>
  </body>
  
  <?php include "footer.php"; ?>