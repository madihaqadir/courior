<?php
include "connection.php";

if(isset($_POST['sub'])){
    $cityname=$_POST['cityaddname'];


    $insert_qry="INSERT INTO `my_city`(`city_name`) VALUES ('$cityname')";


  

    $result=mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='cityshow.php';
    </script>";
}
?>