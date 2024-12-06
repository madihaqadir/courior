<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `branch` WHERE branch_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='branchshow.php';
</script>";
?>