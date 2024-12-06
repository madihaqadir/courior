<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Branch Add Form</h1>
                </span>
              </div>
            </div>

            <!-- INSERT INTO `branch`(`branch_id`, `city_id_FK`, `area`, `contact`, `address`, `email`, `lattitude`, `longitude`) -->

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action="branchaddaction.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">City</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="city" placeholder="City">
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputName1">Area</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="area" placeholder="area">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Contact</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="contact" placeholder="contact">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="address" placeholder="address">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="email" placeholder="email">
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputName1">Lattitude</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="lattitude"placeholder="lattitude">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Longtitude</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="longitude" placeholder="longitude">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="sub" >Submit</button>
                    </form>
                  </div>
                </div>
              </div>



<?php
include "footer.php";
?>