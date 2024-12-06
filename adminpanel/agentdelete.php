<?php
require "connection.php";
$userid = $_GET['dltid'];

$dltquery= "DELETE FROM `agent` WHERE agent_id= $userid" ;
$result= mysqli_query($conn,$dltquery);

echo"<script> 
alert('deleted successfully');
window.location.href='agentshow.php';
</script>";
?>