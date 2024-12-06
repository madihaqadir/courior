<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `my_city` WHERE id= $userid";
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='cityshow.php';
</script>";
?>