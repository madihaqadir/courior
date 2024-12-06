<?php
include "connection.php";

if(isset($_POST['sub'])){
    $agentname=$_POST['agentaddname'];
    $branch=$_POST['branch'];
    $city=$_POST['city'];

    $insert_qry="INSERT INTO `agent`(`user_id_FK`,`branch_id_FK`,`city_id_fk`) VALUES ('$agentname','$branch','$city')";


  

    $result=mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='agentshow.php';
    </script>";
}
?>