users_id<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `user` WHERE users_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='usershow.php';
</script>";
?>