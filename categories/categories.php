use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
<?php include "../header.php";?>
    <link rel =  "stylesheet" href = "../css/categories.css">
    
    <div class="card-deck">

        <h1 style="text-align: center; color: white; width: 100%; font-size: 6rem">DEPARTMENTS</h1>
    
        <a id="aisles"></a>
        <div class="col-lg-4 col-md-6">
            <a href="../src/books.html">
                <div class="card">
                    <img class="card-img-top" src="../img/books.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-size: x-large;">Books</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="../src/electronics.html">
                <div class="card">
                    <img class="card-img-top" src="../img/electronics.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-size: x-large;">Electronics, Computers & Office</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="../src/fitness.html">
                <div class="card">
                    <img class="card-img-top" src="../img/fitness.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-size: x-large;">Fitness Equipment</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <a href="../src/makeup.html">
              <div class="card">
                <img class="card-img-top" src="../img/makeup.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center; font-size: x-large;">Health & Beauty</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a href="../src/home.html">
              <div class="card">
                <img class="card-img-top" src="../img/homegoods.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center; font-size: x-large;">Home & Kitchen</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a href="../src/toys.html">
              <div class="card">
                <img class="card-img-top" src="../img/toys.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center; font-size: x-large;">Toys, Kids & Baby</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        </div>

      <br/> 
      <div class="text-center" >
     <a href = "../src/addnewcategory.html" class="btn btn-outline-primary" style="display: inline-block;">Add new category</a>
      </div>

      <?php include "../footer.php";?>