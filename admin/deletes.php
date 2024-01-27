<?php
include '../php/config.php';

if(!$conn){
    die("Sorry your connection is Failed:".mysqli_connect_error());
}
else{
    echo "Connection was succesfuly";
}


if(isset($_GET['deleteemail'])){
    $email=$_GET["deleteemail"];

    $sql = "DELETE FROM contact WHERE email='$email' ";
    $result= mysqli_query($conn,$sql);
    if($result){
        
        header('location:Contact Us.php');
      
    }
    else{
        die(mysqli_error($conn));
    }
};




?>