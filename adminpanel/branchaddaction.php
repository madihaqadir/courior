<?php
include "connection.php";

if(isset($_POST['sub'])){
    $city=$_POST['city'];
    $area=$_POST['area'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $lattitude=$_POST['lattitude'];
    $longitude=$_POST['longitude'];
   

    $insert_qry = "insert into branch(city_id_FK,area,contact,address,email,lattitude,longitude) VALUES ('$city','$area','$contact','$address','$email','$lattitude','$longitude')";


    $result= mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='branchshow.php';
    </script>";
}
?>
