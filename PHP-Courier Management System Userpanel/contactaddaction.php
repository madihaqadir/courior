<?php
include "connection.php";

if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];


    $insert_qry="INSERT INTO `contact_table`(`contact_name`,`contact_email`,`contact_subject`,`contact_message`) VALUES ('$name','$email','$subject','$message')";
 

    // INSERT INTO `contact_table`(`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES 

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='contact.php';
    </script>";
}
?>