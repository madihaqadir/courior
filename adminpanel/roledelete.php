<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `roll` WHERE roll_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='roleshow.php';
</script>";
?>