<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Service Update Form</h1>
                </span>
              </div>
            </div>



            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="#" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Service Name</label>
                        
                            <?php
                            require "connection.php";
                            $userid = $_GET['updid'];
                            $qry = "SELECT * FROM `service` WHERE service_id= $userid";
                            $result = mysqli_query($conn,$qry);
                            while ($row = mysqli_fetch_assoc($result)) {
                                
                            ?>

                        <input type="text" class="form-control" id="exampleInputName1" name="servicename" value="<?php echo $row['service_name'] ?>">
                        <br>
                        <label for="exampleInputName1">Service Description</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="description" value="<?php echo $row['descrption'] ?>">
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


if(isset($_POST['up'])) {
    $servicename = $_POST['servicename'];
    $description = $_POST['description'];

    $insert_qry="UPDATE `service` SET `service_name`=' $servicename', `descrption`=' $description' WHERE service_id = $userid";
    $result = mysqli_query($conn,$insert_qry);
    echo"<script> 
    alert('updated successfully');
    window.location.href='serviceshow.php';
    </script>";
}
?>

<?php
include "footer.php";
?>