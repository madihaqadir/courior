
<?php
include('connection.php');
?>
<?php

if(isset($_POST['sub'])){

    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $mobilenumber=$_POST['mobilenumber'];
    $role = $_POST['role'];
    $img = $_FILES['img'];


    $imagename = $img['name'];
    $actualpath = $img['tmp_name'];
    $mypath = "images/". $imagename;
    move_uploaded_file($actualpath, $mypath);
    

    $insert_qry="INSERT INTO `user`(`users_name`, `roll_id_fk`, `user_email`,`user_passward`,`user_contact`,`user_image`)VALUES('$Name','$role','$Email','$Password','$mobilenumber','$mypath')";

    $result = mysqli_query($conn, $insert_qry);
    if($result) {
        echo "
            <script>
            alert('Added successfully');
            window.location.href='index.php';
            </script>";
    } else {
        echo "Error: " . mysqli_error($conn); // Display MySQL error if query fails
    }
}
?>