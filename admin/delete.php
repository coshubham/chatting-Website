<?php
include '../php/config.php';

if(!$conn){
    die("Sorry your connection is Failed:".mysqli_connect_error());
}
else{
    echo "Connection was succesfuly";
}


if(isset($_GET['deletefname'])){
    $fname=$_GET["deletefname"];

    $sql = "DELETE FROM users WHERE fname='$fname' ";
    $result= mysqli_query($conn,$sql);
    if($result){
        header('location:user_list_table.php');
      
    }
    else{
        die(mysqli_error($conn));
    }
};




?>