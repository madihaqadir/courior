<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Role Update Form</h1>
                </span>
              </div>
            </div>



            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="#" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Role Name</label>
                            <?php
                            require "connection.php";
                            $userid = $_GET['updid'];
                            $qry = "SELECT * FROM `roll` WHERE roll_id= $userid";
                            $result = mysqli_query($conn,$qry);
                            while ($row = mysqli_fetch_assoc($result)) {
                                
                            ?>

                        <input type="text" class="form-control" id="exampleInputName1" name="rolename" value="<?php echo $row['role_username'] ?>">
                        <?php
                        
                        }
                        ?>
                      </div>

                      <button type="submit" class="btn btn-primary mr-2" name="up" >Update</button>
                    </form>
                  </div>
                </div>
              </div>

<?php

include "connection.php";
if(isset($_POST['up'])) {
    $rolename = $_POST['rolename'];

    $insert_qry="UPDATE `roll` SET `roll_name`='$rolename' WHERE roll_id = $userid";
    $result = mysqli_query($conn,$insert_qry);
    echo"<script> 
    alert('updated successfully');
    window.location.href='roleshow.php';
    </script>";
}
?>

<?php
include "footer.php";
?>