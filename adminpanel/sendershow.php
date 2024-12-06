<?php
include "header.php";
?>


<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Show Sender Form</h1>
                </span>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <!-- <th>ID</th> -->
                        <th>Sender Name</th>
                        <th>Sender Email</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Date</th>
                        <!-- <th>Action</th> Changed "Update" and "Delete" to a single "Action" column for better responsiveness -->
                        </tr>
                      </thead>
                      <tbody>
                     <?php 
                     require "connection.php";
                     $qry = "SELECT * FROM booking";
                     $res = mysqli_query($conn, $qry);

                     while ($data = mysqli_fetch_assoc($res)) {
                     ?>
                        <tr>
                      
                           <td><?php echo $data['sender_name']; ?></td>
                           <td><?php echo $data['sender_email']; ?></td>
                           <td><?php echo $data['sender_address']; ?></td>
                           <td><?php echo $data['sender_contact']; ?></td>
                           <td><?php echo $data['date']; ?></td>
                           
                          
                        </tr>
                     <?php } ?>
                  </tbody>
                    </table>
                  </div>
                </div>
              </div>
                  </div>
                </div>
              </div>
              






<?php
include "footer.php";
?>