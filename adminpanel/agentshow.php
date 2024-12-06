<?php
include "header.php";
?>
   <!-- partial -->
   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1>Agent show Form</h1>
                </span>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">


                  <!-- INSERT INTO `agent`(`agent_id`, `user_id_FK`, `branch_id_FK`, `city_id_fk`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]') -->

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>USER</th>
                          <th>CITY</th>
                          <th>BRANCH</th>
                          <th>ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM  `agent` JOIN user ON agent.user_id_FK=user.users_id JOIN branch ON
                        agent.branch_id_FK=branch.branch_id JOIN my_city ON
                        agent.city_id_fk=my_city.id " ;

                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['agent_id'] ?></td>
                          <td class="py-1">
                          <?php
                            // Fetch category name based on cat_id
                            $categoryId = $row['user_id_FK'];
                            $categoryQuery = "SELECT `users_name` FROM `user` WHERE `users_id` = $categoryId";
                            $categoryResult = mysqli_query($conn, $categoryQuery);

                            // Check if a row was found
                            if (mysqli_num_rows($categoryResult) > 0) {
                              $categoryRow = mysqli_fetch_assoc($categoryResult);
                              echo $categoryRow["users_name"];
                            } else {
                              echo "user not found"; // or handle the absence of category as per your logic
                            }

                            ?>
                          </td>
                        
                          <td class="py-1">
                          <?php
                            // Fetch category name based on cat_id
                            $categoryId = $row['branch_id_FK'];
                            $categoryQuery = "SELECT `area` FROM `branch` WHERE `branch_id` = $categoryId";
                            $categoryResult = mysqli_query($conn, $categoryQuery);

                            // Check if a row was found
                            if (mysqli_num_rows($categoryResult) > 0) {
                              $categoryRow = mysqli_fetch_assoc($categoryResult);
                              echo $categoryRow["area"];
                            } else {
                              echo "branch not found"; // or handle the absence of category as per your logic
                            }

                            ?>
                          </td>
                          <td class="py-1">
                          <?php
                            // Fetch category name based on cat_id
                            $categoryId = $row['city_id_FK'];
                            $categoryQuery = "SELECT `city_name` FROM `my_city` WHERE `id` = $categoryId";
                            $categoryResult = mysqli_query($conn, $categoryQuery);

                            // Check if a row was found
                            if (mysqli_num_rows($categoryResult) > 0) {
                              $categoryRow = mysqli_fetch_assoc($categoryResult);
                              echo $categoryRow["city_name"];
                            } else {
                              echo "city not found"; // or handle the absence of category as per your logic
                            }

                            ?>
                          </td>

                          <td> 
                            <a href="agentupdate.php?updid=<?php echo $row['agent_id'] ?>">
                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          </a>
                          <a href="agentdelete.php?dltid=<?php echo $row['agent_id'] ?>">
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