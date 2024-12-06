<?php
session_start();
require "connection.php";

if(isset($_POST['sub'])){
    $user=$_POST['username'];
    $pwd=$_POST['password'];
    // INSERT INTO `user`(`users_id`, `roll_id_fk`, `users_name`, `user_email`, `user_contact`, `user_passward`, `user_image`) 
    $qry="SELECT * FROM `user` WHERE users_name = '$user' AND user_passward = '$pwd'";
    $res=mysqli_query($conn,$qry);

 if($res){
    $row = mysqli_fetch_assoc($res);
    $count=mysqli_num_rows($res);
 if($count>0){
    
    $_SESSION['id']=$row['users_id'];
    $_SESSION['role']=$row['roll_id_fk'];
    $_SESSION['name']=$row['users_name'];
    $_SESSION['email']=$row['user_email'];
    $_SESSION['password']=$row['user_passward'];
    $_SESSION['img']=$row['user_image'];

    if($_SESSION['role'] == 1){
        echo "
        <script>
        window.location.href='index.php';
        </script>

        ";
    }
else if($_SESSION['role'] == 2){
    echo "
    <script>
    window.location.href='userindex.php';
    </script>
    ";
}
 }
else{
    echo"
    <script>
    alert('Login Failed')
    </script>
    ";
}

    
 }  
    
}
?>

