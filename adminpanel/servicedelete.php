<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `service` WHERE service_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='serviceshow.php';
</script>";
?>