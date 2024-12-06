


<?php
include('header.php');

include('connection.php');
$type_q="select * from parcel_type ";
$res_type=mysqli_query($conn,$type_q); 

$branch_q="select * from branch";
$res_branch=mysqli_query($conn,$branch_q);

$branch_qq="select * from branch ";
$res_branch2=mysqli_query($conn,$branch_qq);




$pri_kg="select * from constraints where constraint_name='KG'";
$res_kg=mysqli_query($conn,$pri_kg);
$data_kg=mysqli_fetch_assoc($res_kg);
$kg=$data_kg['price'];


$pri_km="select * from constraints where constraint_name='KM'";
$res_km=mysqli_query($conn,$pri_km);
$data_km=mysqli_fetch_assoc($res_km);
$km=$data_km['price'];

?>
<style>
/* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.container {
    /* background-color: #ffffff; */
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

h1, h6 {
    color:#ff4d01;
}

.form-floating {
    margin-bottom: 15px;
}

.form-control {
    border: 1px solid #ced4da;
    border-radius: 4px;
}

label {
    color: #495057;
}

.btn-primary {
    background-color: #ff4d01;
    border: none;
}

.btn-primary:hover {
    background-color: #FFA500;
}

.btn-danger {
    background-color: #FFA500;
    border: none;
}

.btn-danger:hover {
    background-color: #ff4d01;
}

button {
    margin-top: 20px;
    width: 100%;
    padding: 10px;
}

.text-center {
    text-align: center;
}

input[type="tel"]:disabled {
    background-color: #e9ecef;
}

.mt-5 {
    margin-top: 3rem !important;
}

.mb-2 {
    margin-bottom: 0.5rem !important;
}

.mb-4 {
    margin-bottom: 1.5rem !important;
}

.pb-5 {
    padding-bottom: 3rem !important;
}

.border-bottom {
    border-bottom: 1px solid #007bff !important;
}

.border-primary {
    border-color: #007bff !important;
}

.row {
    display: flex;
    flex-wrap: wrap;
}

.col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%;
}

.col-xl-2, .col-xl-6 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

.col-xl-2 {
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
}

.col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%;
}

@media (max-width: 576px) {
    .col-sm-12, .col-xl-2, .col-xl-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    button {
        width: 100%;
    }
}

    </style>

<main id="main">
  <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Booking</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Booking</p>
            </div>
        </div>
    </div> 
    <?php     if((isset($_SESSION['name']))){ 
        
        
    } 
    
    else{?>
    <h1 style="color:red;" class="text-center"><?php echo 'You Are Not Login Please login Then Booking';?></h1>
        
    
<?php }?>
<form action="form_insert.php" method="post">
<div class="container mt-5">
<h1 class="mb-2">Parcel Information</h1>
<div class="row mt-5 pb-5 border-bottom border-primary" id="detail_of_parcel">


<h6 class="mb-2">Choose Nearest Branch</h6>
                                <div class="form-floating mb-4">
                                    <select class="form-control" name="pick_citys" id="pick_city" onchange="pick()" >
                                    <option value="" selected disabled>Choose Branch</option>
                                        <?php while($data1=mysqli_fetch_assoc($res_branch)){ ?>
                 <option value='<?php echo $data1['branch_id'];?>  <?php echo $data1['lattitude'];?> <?php echo $data1['longitude'];?>'><?php echo $data1['area'];?></option>
                   
                   <?php } ?>
                   <input type="hidden"  name="" id="pick_lat" placeholder="idd" >
                   <input type="hidden"  name="" id="pick_long" placeholder="idd" >
                                    </select>
                                    <!-- <label for="floatingSelect">Select branch</label> -->
                                </div> 


                                <h6 class="mb-2">Choose Reciever Nearest Branch</h6>
                      
                                <div class="form-floating mb-4">
                                    <select class="form-control" name="drop_citys" id="drop_city" onchange="drop()">
                                    <option value="" selected disabled>Choose Branch</option>
                                      <?php while($data1=mysqli_fetch_assoc($res_branch2)){ ?>
                   
                                        <option value='<?php echo $data1['branch_id'];?> <?php echo $data1['lattitude'];?> <?php echo $data1['longitude'];?>'><?php echo $data1['area'];?></option>
                   
                   <?php } ?>
                   <input type="hidden" name="" id="drop_lat" placeholder="idd" >
                   <input type="hidden"  name="" id="drop_long" placeholder="idd" >
                                    </select>
                                    <!-- <label for="floatingSelect">Select branch</label> -->
                                </div> 
                             

<input type="hidden" name="" id="kg" value="<?php echo $kg ?>">
<input type="hidden" name="" id="km" value="<?php echo $km ?>">
<input type="hidden" name="" id="distance" >


                                <div class="col-sm-12 col-xl-2">
<h6 class="mb-2">Weight</h6>
<input type="tel" class="form-control" id="user_weight"  placeholder="In Kg" required pattern="[0-9]{1,}" title="please enter correct weight"  name="weight">
</div>
<div class="col-sm-12 col-xl-2">
<h6 class="mb-2">Height</h6>
<input type="tel" class="form-control" required pattern="[0-9]{1,}" title="please enter correct height"  placeholder="In Inches" name="height">
</div>
<div class="col-sm-12 col-xl-2">
<h6 class="mb-2">Length</h6>
<input type="tel" class="form-control"  placeholder="In Inches" required pattern="[0-9]{1,}" title="please enter correct lenght"  name="length">
</div>
<div class="col-sm-12 col-xl-2">
<h6 class="mb-2">Width</h6>
<input type="tel" class="form-control" required pattern="[0-9]{1,}" title="please enter correct width"   placeholder="In cm" name="width">
</div>

<div class="col-sm-12 col-xl-2 btn-group align-items-end">
<button type="button"  name="add-iem_btn" class="btn btn-primary" onclick="xyz()">check price</button>
</div> 
<div class="col-sm-12 col-xl-2 ">
<h6 class="mb-2">Price</h6>


<input type="hidden"  required  class="form-control" name="price" placeholder="0.00 PKR" id="res"> 

 <input type="tel" disabled  required  class="form-control"  placeholder="0.00 PKR" id="resS"> 
</div>

</div>


    <div class="row border-bottom border-primary">
    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
            

<input type="hidden" id="number_of_parcels_1" class="form-control" name="quantity">

  
                                      <h6 class="mb-2">Sender Name</h6> 
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" name="sender_name" id="floatingInput" required pattern="[A-Za-z]{3,}" title="Minimun Three letter  without Number"
                                    placeholder="Enter Your Sender Name">
                                <!-- <label for="floatingInput">Enter Sender Name</label> -->
                            </div>
                            <h6 class="mb-2">Sender Email</h6>
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control"name="sender_email" required pattern="^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$" title="Minimun Three letter  without Number" id="floatingEmail"
                                placeholder="Enter Your Sender Email">
                                <!-- <label for="floatingPassword">Enter Sender Email</label> -->
                            </div>
                            <h6 class="mb-2">Address</h6>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control"name="sender_address" id="floatingPassword" required pattern="[A-Za-z0-9]{3,}" title="Please Enter Correct Address "
                                placeholder="Enter Your Address">
                                <!-- <label for="floatingPassword">Enter Address</label> -->
                            </div>
                            <h6 class="mb-2">Contact</h6>
                            <div class="form-floating mb-4">
                                <input type="tel" class="form-control" name="sender_phone_number" id="floatingInput" required pattern="      ^^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$$" title=" Contact Number Is Invalid" 
                                placeholder="Enter Your Phone Number">
                                <!-- <label for="floatingPassword">Enter Phone Number</label> -->
                            </div>
                            <h6 class="mb-2">Date</h6>
                            <div class="form-floating mb-4">
                                <input type="date" class="form-control" name="sender_date" id="floatingInput"
                                placeholder="Enter Your Phone Number">
                                <!-- <label for="floatingPassword">Enter Date</label> -->
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                   
                           
                        <h6 class="mb-2">choose product type</h6>
                                <div class="form-floating mb-4">
                                    <select class="form-control" name="product">
                                        <?php while($data=mysqli_fetch_assoc($res_type)){ ?>
                   
                   <option value=" <?php echo $data['type_id'];?>"><?php echo $data['type_name'];?>
                   <?php } ?>
                                    </select>
                                    <!-- <label for="floatingSelect">Select type</label> -->
                                </div> 
                          


                                <h6 class="mb-2">Reciever Name</h6>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" name="reciever_name" required pattern="[A-Za-z]{3,}" title="Minimun Three letter  without Number" id="floatingInput"
                                    placeholder="Enter Your Reciever Name">
                                <!-- <label for="floatingInput">Enter Reciever</label> -->
                            </div>
                            <h6 class="mb-2">Reciever Email</h6>
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" required pattern="^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$" title="Email Address Is Invalid .Please  Enter Correct Email Address" name="reciever_email" id="floatingEmail"
                                placeholder="Enter Your Reciever Email">
                                <!-- <label for="floatingPassword">Enter Reciever Email</label> -->
                            </div>
                            <h6 class="mb-2">Address</h6>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" name="reciever_address" id="floatingPassword" required pattern="[A-Za-z0-9]{3,}" title="Please Enter Correct Address "
                                placeholder="Enter Your Address">
                                <!-- <label for="floatingPassword">Enter Address</label> -->
                            </div>
                            <h6 class="mb-2">Contact</h6>
                            <div class="form-floating mb-4">
                                <input type="tel" class="form-control" required pattern="      ^^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$$" title=" Contact Number Is Invalid"  name="reciever_phone_number" id="floatingInput"
                                placeholder="Enter Your Phone Number">
                                <!-- <label for="floatingPassword">Enter Phone Number</label> -->
                            </div>
                       
                        </div>
                        <!-- <button type="submit" class="btn btn-primary"  name="save_btn">Save</button> -->
                      
                    </div>
    </div>
    


<div class="container mt-3 mb-3 text-center">
<button type="submit" class="btn btn-primary"  name="save_btn">Save</button>
<button type="reset"  class="btn btn-danger"  name="cancel_btn">Cancel</button>
</form>
</div>
</div>

<?php
include('footer.php');
                                     
?>
<?php    ?>
<script>
 var Settlement = [];
Settlement.deg2rad = function(deg)
{
	return (deg * Math.PI) / 180.0;
}
Settlement.rad2deg = function(angle) {
  // (angle / Math.PI * 180)
  return angle * 57.29577951308232; 
}

function pick(){
    var str=document.getElementById("pick_city").value;
    id=str.trim().split(/\s+/);
    document.getElementById("pick_lat").value=id[1]
    document.getElementById("pick_long").value=id[2]
}
function drop(){
    var str=document.getElementById("drop_city").value;
    id=str.trim().split(/\s+/);
    document.getElementById("drop_lat").value=id[1]
    document.getElementById("drop_long").value=id[2]
}







function xyz(){
    latitudeFrom = document.getElementById("pick_lat").value;
longitudeFrom = document.getElementById("pick_long").value;
latitudeTo = document.getElementById("drop_lat").value;
longitudeTo = document.getElementById("drop_long").value;
//Calculate distance of two longitude and latitude;
theta = longitudeFrom - longitudeTo;
dist = Math.sin(Settlement.deg2rad(latitudeFrom)) * Math.sin(Settlement.deg2rad(latitudeTo)) + Math.cos(Settlement.deg2rad(latitudeFrom)) * Math.cos(Settlement.deg2rad(latitudeTo)) * Math.cos(Settlement.deg2rad(theta));
dist = Math.acos(dist);
dist = Settlement.rad2deg(dist);
miles = dist * 60 * 1.1515;
console.log(distance = miles * 1.609344+' km');
total=distance = miles * 1.609344
document.getElementById("distance").value=total
//kg 
//km
//weight
var weight_user= document.getElementById("user_weight").value;
var kilometer= document.getElementById("km").value;
var kilogram= document.getElementById("kg").value;
var final_weight=weight_user*kilogram;
var final_lenght=total*kilometer;
var final_price=final_weight+final_lenght;
document.getElementById("res").value=final_price;
document.getElementById("resS").value=final_price;
}

</script> 
