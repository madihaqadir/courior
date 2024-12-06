<?php
include('header.php');

include('connection.php');
$x=$_GET['id'];
$query = "SELECT * FROM  branch  join my_city on branch.city_id_FK=my_city.id where city_id_FK='$x'" ;


$res = mysqli_query($conn,$query);

?>

<style>
    .list-group{
        border-color:none;
    }
</style>
  <main id="main">
  <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Branches</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Branches</p>
            </div>
        </div>
    </div>
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Cities Branches</h2>
          <p>Manage orders, automate shipping with rules, organize packing with pick lists and packing slips, track shipments, and notify recipients — in one easy-to-use platform.</p>
        </div>
      </div>
    </div>
  </div>
  <nav>
   
  </nav>
</div><!-- End Breadcrumbs -->




<!-- ======= Our Team Section ======= -->
<section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">

    <div class="section-header mt-5">
      <h2>Branches Of Zeptar Cities.</h2>

    </div>
 


    <div class="row gy-4">
    <?php while($data1=mysqli_fetch_assoc($res)){ ?>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="img/branche.png" alt="" class="img-fluid">
          </div>
          <h3><?php echo $data1['city_name']; ?></h3>
          <div class="container">

<ul class="list-group list-group-flush">
<li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Area: </div>
      <?php echo $data1['area']; ?>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Address: </div>
      <?php echo $data1['address']; ?>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Email Address: </div>
      <?php echo $data1['email']; ?>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Contact: </div>
      <?php echo $data1['contact']; ?>
    </div>
  </li>

</ul>
          </div>
</div>
      </div><!-- End Card Item -->
      <?php } ?>

    </div>

  </div>
</section><!-- End Services Section -->



</main><!-- End #main -->

<?php
include('footer.php')
?>