<?php include "header.php";
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("Location: index.php");
  exit;
}


?>
    <div class="page-name" style="text-align:center">
        <p>
          <h3>Add New Product</h3> 
        </p>
        </div>
 </div>

 <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <form action="verifyproduct.php" method="post" enctype="multipart/form-data">
                  <!-- <form action="verifyproduct.php" method="post"> -->
                    <p>Enter Product Information</p>
                    

                    <div class="form-outline mb-4">
                        <input type="text" name="product_name" class="form-control <?php echo (!empty($product_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $product_name; ?>" placeholder="Product Name">
                      <label class="form-label" for="form2Example11">Product Name</label>
                    </div>
                    <div class="form-outline mb-4">
                        <textarea name="product_info"></textarea>
                        <label class="form-label" for="form2Example11">Product Description</label>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Product Category </label><br>
                        <input type='radio' name='product_category' value='Makeup products'>
                        <label for='product_category'>Makeup products</label><br>
                        <input type='radio' name='product_category' value='Electronics'>
                        <label for='product_category'>Electronics</label><br>
                        <input type='radio' name='product_category' value='Fitness'>
                        <label for='product_category'>Fitness</label><br>
                        <input type='radio' name='product_category' value='Home Goods'>
                        <label for='product_category'>Home Goods</label><br>
                        <input type='radio' name='product_category' value='Toys'>
                        <label for='product_category'>Toys</label><br>
                        <input type='radio' name='product_category' value='Books'>
                        <label for='product_category'>Books</label><br>
                    </div>

  
  
                    <div class="form-outline mb-4">
                        <input  type="number" name="product_price" class="form-control <?php echo (!empty($product_price_err)) ? 'is-invalid' : ''; ?> " step=".01" min=0.01 >
                        <label class="form-label" for="form2Example22">Product Price</label>
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Product On Sale?</label>
                        <input type="checkbox" name="product_onsale" class="form-control <?php echo (!empty($product_onsale_err)) ? 'is-invalid' : ''; ?> value='onsale'">
                    </div>

                    <div class="form-outline mb-4">
                        <input type="number" name="product_saleprice" class="form-control <?php echo (!empty($product_saleprice_err)) ? 'is-invalid' : ''; ?>" step=".01" min=0.01 >
                        <label class="form-label" for="form2Example22">Product Sale Price</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="file" id="product_img" name="product_img" class="form-control">
                        <label class="form-label" for="form2Example22">Add Image</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                        <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" value="Add Product" />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
        <!-- <section style="text-align: center;">
      
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
          Save
        </button>
      
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">NOTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
              <div class="modal-body">
                Are you sure about making these changes?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Save</button>
              </div>
            </div>
          </div>
        </div>
          <br>
    </section> -->

</body>
</html>
