<?php 
include "header.php"
?>
 <div class="main-panel">
          <div class="content-wrapper">
          <div class="container mt-3 mb-3 mx-3 my-3">
    <div class="row">
    <div class="col-lg-6 ">
    <img src="<?php echo $_SESSION['img'] ?>" class="img-thumbnail" alt="..." >
    </div>
    <div class="col-lg-6 mt-5 mb-5 ">
    <div class="card" >
    <?php 
                        require "connection.php";
                        // SELECT SELECT `user_id`, `user_name`, `email`, `user_password`, `role_FK`, `user_img`
                      
                            
                            ?>
  <div class="card-body">
    <h1>User Profile Details</h1>
    <h5 class="card-title">Name: <?php echo $_SESSION['name'] ?> </h5>
    <h5 class="card-title">Email: <?php echo $_SESSION['email'] ?> </h5>
    <h5 class="card-title">Password:  <?php echo $_SESSION['password'] ?></h5>


    
  </div>
  
</div>
    </div>
    </div>
</div>
          
          </div>

          <?php 
include "footer.php"
?>







