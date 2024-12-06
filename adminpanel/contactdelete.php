<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `contact_table` WHERE contact_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='contactshow.php';
</script>";
?>

 <!-- SELECT `contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message` FROM `contact_table` WHERE 1 -->