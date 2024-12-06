<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Agent Update Form</h1>
                </span>
              </div>
            </div>



            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="#" method="POST">
                      <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="agentaddname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Branch</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="branch">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">City</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="city">
                      </div>
                            <?php
                            require "connection.php";
                            $userid = $_GET['updid'];
                            $qry = "SELECT * FROM `agent` WHERE agent_id= $userid";
                            $result = mysqli_query($conn,$qry);
                            while ($row = mysqli_fetch_assoc($result)) {
                                
                            ?>

                       
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
    $agentname = $_POST['agentaddname'];
    $branch=$_POST['branch'];
    $city=$_POST['city'];

    $insert_qry="UPDATE `agent` SET `user_id_FK`,`branch_id_FK, `city_id_fk` ='$agentname','$branch','$city' WHERE user_id_FK = $userid";
    $result = mysqli_query($conn,$insert_qry);
    echo"<script> 
    alert('updated successfully');
    window.location.href='agentshow.php';
    </script>";
}
?>

<?php
include "footer.php";
?>