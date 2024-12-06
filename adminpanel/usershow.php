<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Role show Form</h1>
                </span>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Role</th>
                          <th> User Name</th>
                          <th> Email</th>
                          <th> Contact</th>
                          <th> Image</th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>

                      <!-- SELECT `users_id`, `roll_id_fk`, `users_name`, `user_email`, `user_contact`, `user_passward`, `user_image` FROM `user` WHERE 1 -->
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `user`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['users_id'] ?></td>
                          <td class="py-1"><?php echo $row['roll_id_fk'] ?></td>
                          <td class="py-1"><?php echo $row['users_name'] ?></td>
                          <td class="py-1"><?php echo $row['user_email'] ?></td>
                          <td class="py-1"><?php echo $row['user_contact'] ?></td>
                          <td class="py-1"><img src="<?php echo $row['user_image']; ?>"></td>
                            
                          <td> 
                            
                          <a href="userdelete.php?dltid=<?php echo $row['users_id'] ?>">
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