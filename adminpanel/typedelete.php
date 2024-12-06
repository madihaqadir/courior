<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `parcel_type` WHERE type_id= $userid";
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='typeshow.php';
</script>";
?>