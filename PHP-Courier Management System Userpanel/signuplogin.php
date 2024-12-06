
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->

     
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <h1>Signup Login</h1>
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form action="signupaction.php" method="POST" enctype="multipart/form-data">
                
                  <div class="form-group">
                    <input type="name" class="form-control form-control-lg" id="exampleInputUsername1" name="Name" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="Email" class="form-control form-control-lg" id="exampleInputEmail1" name="Email" placeholder="Email" >
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="Password" placeholder="Password" >
                  </div>

                  <div class="form-group">
                    <input type="tel" class="form-control form-control-lg" id="exampleInputmobilenumber1" name="mobilenumber" placeholder="Mobile Number">
                  </div>
                  <div class="form-group">
                    <label for="">Role Name</label>
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="role">
                    <?php
                          require "connection.php";
                          $qry = "SELECT * FROM `roll`";
                          $res = mysqli_query($conn, $qry);

                          while ($opt =mysqli_fetch_assoc($res)){
                            ?>
                  <option value="<?php echo $opt['roll_id']?>"><?php echo $opt['roll_name']?></option>
                      <?php
                          } ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <input type="file" class="form-control form-control-lg" id="exampleInputPassword1" name="img">
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  <div class="mt-3">
                   <button type="submit" name="sub" class="btn btn-primary py-3 w-100 mb-4">Sign Up </button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="sign.php" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>
