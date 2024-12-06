<?php
include "connection.php";

if(isset($_POST['sub'])){
    $servicename=$_POST['servicename'];
    $description=$_POST['description'];



    $insert_qry="INSERT INTO `service`(`service_name`,`descrption`) VALUES ('$servicename', '$description')";  

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='serviceshow.php';
    </script>";
}
?>