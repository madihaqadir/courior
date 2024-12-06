<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>User Add Form</h1>
                </span>
              </div>
            </div>



            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action="useraddaction.php" method="POST" enctype="multipart/form-data">

                  
                    <div class="form-group">
                        <!-- <label for="exampleInputName1">Role</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="rollname" placeholder="Enter Role"> -->
                        <label for="">Role Name</label>
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="rollname">
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
                        <label for="exampleInputName1">Enter Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter Name">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="email" placeholder="Email">
                      </div>
                                  
                      <div class="form-group">
                        <label for="exampleInputName1">Phone Number</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="number" placeholder="Phone Number">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Password</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="password" placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <input type="file" class="form-control" id="exampleInputName1" name="img">
                      </div>

                      <button type="submit" class="btn btn-primary mr-2" name="sub" >Submit</button>
                    </form>
                  </div>
                </div>
              </div>



<?php
include "footer.php";
?>