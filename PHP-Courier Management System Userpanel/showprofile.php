<?php 
include "header.php"
?>
 <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3"> Profile Details</h1>
            <div class="d-inline-flex align-items-center ">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Profile Details</p>
            </div>
        </div>
    </div>
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
<br>
<br><br><br><br>

<?php 
include "footer.php"
?>