<?php
      $conn = mysqli_connect("localhost", "root", "", "chat");
      if(!$conn){
        echo"Database connecetd" . mysqli_connect_error();
      }
?>