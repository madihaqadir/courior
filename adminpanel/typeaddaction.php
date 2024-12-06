<?php
include "connection.php";

if(isset($_POST['sub'])){
    $typename=$_POST['type_name'];


    $insert_qry="INSERT INTO `parcel_type`(`type_name`) VALUES ('$typename')";

    $result=mysqli_query($conn,$insert_qry);
    echo"
    <script>
    alert('Added successfully');
    window.location.href='typeshow.php';
    </script>";
}
?>