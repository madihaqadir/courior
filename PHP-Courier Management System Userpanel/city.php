<?php
include "header.php";
require "connection.php";
$q1="SELECT * from my_city  ";
$res1=mysqli_query($conn,$q1);
$data1=mysqli_fetch_assoc($res1);;
?>
 <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">City</h1>
            <div class="d-inline-flex align-items-center ">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">City</p>
            </div>
        </div>
    </div>
<section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-5">
          <h2>Cities where FASTER - Logistics Company is located.</h2>

        </div>

<div class="row gy-4">

                   



<?php while($data1=mysqli_fetch_assoc($res1)){ ?>

  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
  <a href="branches.php?id=<?php echo $data1['id'];?>">
<div class="card">
<div class="card-img">
 <img src="img/123.jpg" alt="" class="img-fluid">
</div>
<h3 style="text-decoration:none;"><?php echo $data1['city_name']; ?></h3>
<p></p>            </div>
</a>
</div><!-- End Card Item -->

  <?php } ?>


        </div>


      </div>
      </div>
    </section>

<?php
include "Footer.php"
?>