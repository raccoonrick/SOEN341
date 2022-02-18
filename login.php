<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  echo "<script>history.back();</script>";
  exit;
}
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  // Check if username is empty
  if(!empty(trim($_POST["username"]))){
      $username = trim($_POST["username"]);
  }
  else{
    $username_err = "Please enter a username.";
  }
  if(!empty(trim($_POST["password"]))){
    $password = trim($_POST["password"]);
  }
  else{
    $password_err = "Please enter a password.";
  }
  if(!empty($username) && !empty($password)){
    $sql = "SELECT id, username, pass, is_admin FROM users WHERE username = ?";

    if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      $param_username = $username;
      if(mysqli_stmt_execute($stmt)){
        // Store result
        mysqli_stmt_store_result($stmt);
        
        // Check if username exists, if yes then verify password
        if(mysqli_stmt_num_rows($stmt) == 1){                    
            // Bind result variables
            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password,$is_admin);
            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($password, $hashed_password)){
                    // Password is correct, so start a new session
                    session_start();
                    
                    // Store data in session variables
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username;    

                    if($is_admin == 1){
                      $_SESSION['is_admin'] = true;
                    }
                    else{
                      $_SESSION['is_admin'] = false;
                    }
                    
                    // Redirect user to previous page
                    echo "<script>history.back();</script>";
                } else{
                    // Password is not valid, display a generic error message
                    echo "<script>alert('Invalid Login Details. Please Try Again')</script>";
                }
            }
        } else{
            // Username doesn't exist, display a generic error message
            echo "<script>alert('Invalid Login Details. Please Try Again')</script>";
        }
    } else{
      echo "<script>alert('An Error Has Occured')</script>";
    }

    // Close statement
    mysqli_stmt_close($stmt);
    }
  }
  mysqli_close($link);
}
include "header.php";
?>
    <link rel ="stylesheet" href = "css/login.css">


<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <p>Please login to your account</p>
                    

                    <div class="form-outline mb-4">
                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" placeholder="email i.e, username@gmail.com">
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                      <label class="form-label" for="form2Example11">Username</label>
                    </div>
  
  
                    <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        <label class="form-label" for="form2Example22">Password</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                        <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" value="Log in" />
                      <!-- <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log in</button> -->
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p> &nbsp;&nbsp;&nbsp;
                       <a href="register.php"> <button type="button" class="btn btn-outline-info"> 
                          Register Now  </a> </button>
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Improve your shopping experience with us</h4>
                  <p class="small mb-0">Soenify is the newest e-commerse app that will get the user the best products.
                      We ship worldwide and we promise our users for the best costumer service and experience.
                      Join us today !! </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include "footer.php";