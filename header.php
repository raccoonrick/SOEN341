<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soenify</title>
    <link rel="icon" href="../img/Icon.jpg" type="image/icon type">
   <!----CSS and Bootstrap style---->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e6f61e0e67.js" crossorigin="anonymous"></script>
    <link href="https://db.onlinewebfonts.com/c/68b898f6044bbee439423445076f3168?family=Roxborough+CF+Thin" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel =  "stylesheet" href = "../css/headernfooter.css">
    <link rel =  "stylesheet" href = "../css/categories.css">
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
    <!--Header-->
    <header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg">
                <div class="logo">   <a href="../index.php"> <img src="../img/logotrans.png" width="255.25" height = "96.25" alt=""></a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navlist">
                    <div class = "mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item"></li>
                        <!--Search bar-->
                        <div class="wrap">
                            <div class="search">
                                <input type="text" class="searchTerm" placeholder="Search for a product">
                                <button type="submit" class="searchButton">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </ul>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class = "mr-auto"></div>
                        <ul class="navbar-nav">
                            <!--Login-->
                            <?php
                            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                                
                                echo "<li class=\"nav-item\">";
                                echo "<a class=\"nav-link\" href=\"../login.php\">Sign in</a></li>";
                            }

                            else{
                                if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true){
                                    echo "<li class=\"nav-item\">";
                                    echo "<a class=\"nav-link\" href=\"../addproduct.php\">Add product</a></li>";
                                  }
                                echo "<li class=\"nav-item dropdown\">";
                                echo "<div class=\"dropdown\">";
                                echo "<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"";
                                echo "data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">My Account</a>";
                                echo "<div class=\"dropdown-content\">";
                                echo "<a href=\"#\">My Account</a>";
                                echo "<a href=\"#\">Wish List</a>";
                                echo "<a href=\"../logout.php\">Sign Out</a>";
                                echo "</div></div></li>";
                            }

                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../cart.php"><i class="fa fa-shopping-cart"></i>Cart</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <!--Dropdown menu for departments-->
            <nav class="collapse navbar-collapse" id="navbarNav2">
                <div class = "mr-auto"></div>
                <ul class="navbar-nav">
                    <li  class="nav-item dropdown">
                        <div class="dropdown" style="top:-25px;">
                            <a class="nav-link dropdown-toggle" href="../categories.php"  id="navbarDropdown2" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop All Departments</a>
                            <div class="dropdown-content2">
                                <?php
                                require_once "config.php";
                                $sql = "SELECT * FROM categories";
                                $result = $link->query($sql);
                                
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                    echo "<a href='../categories/" . $row["cat_link"] . "'>" . $row["cat_name"] . "</a>";
                                    }
                                }
                            ?>
                            <a href="../categories.php"><b>See All</b></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

        </div>
    </header>
    <!--end of header-->
    </body>
<!-- </html> -->
