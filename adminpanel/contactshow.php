<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Contact Show Form</h1>
                </span>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th><h6>ID</h6></th>
                          <th><h6>NAME</h6></th>
                          <th><h6>EMAIL</h6></th>
                          <th><h6>SUBJECT</h6></th>
                          <th><h6>MESSAGE</h6></th>
                          <th><h6>ACTION</h6></th>
                        </tr>
                      </thead>
                      <tbody>
                     
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `contact_table`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['contact_id'] ?></td>
                          <td class="py-1"><?php echo $row['contact_name'] ?></td>
                          <td class="py-1"><?php echo $row['contact_email'] ?></td>
                          <td class="py-1"><?php echo $row['contact_subject'] ?></td>
                          <td class="py-1"><?php echo $row['contact_message'] ?></td>

<td>
                          <a href="contactdelete.php?dltid=<?php echo $row['contact_id'] ?>">
                          <button type="button" class="btn btn-danger btn-rounded btn-fw">Delete</button>
                          </a>
                        </td>
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