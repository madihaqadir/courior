<?php
include "header.php";
?>


<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Branch show Form</h1>
                </span>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>ID</th>
                        <th>City ID</th>
                        <th>Area</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Action</th> <!-- Changed "Update" and "Delete" to a single "Action" column for better responsiveness -->
                        </tr>
                      </thead>
                      <tbody>
                     <?php 
                     require "connection.php";
                     $qry = "SELECT * FROM branch";
                     $res = mysqli_query($conn, $qry);

                     while ($data = mysqli_fetch_assoc($res)) {
                     ?>
                        <tr>
                           <td><?php echo $data['branch_id']; ?></td>
                           <td><?php echo $data['city_id_FK']; ?></td>
                           <td><?php echo $data['area']; ?></td>
                           <td><?php echo $data['contact']; ?></td>
                           <td><?php echo $data['address']; ?></td>
                           <td><?php echo $data['email']; ?></td>
                           
                           <td> 
                              <a href="branchupdate.php?updid=<?php echo $data['branch_id']; ?>">
                                 <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                              </a>
                              <a href="branchdelete.php?dltid=<?php echo $data['branch_id']; ?>">
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