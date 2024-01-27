<?php
include 'config.php';

if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $message=$_POST['message'];

  //insert query
  $sql = "INSERT INTO contact (email, message)
  VALUE ('$email','$message')";

   //execute query
   $result=mysqli_query($conn,$sql);

   //we will check
   if($result){
       echo '<script>alert("Your Message Send to Admin")</script>';

   }
   else{
       die(mysqli_error($conn));
   }
}
if(!$conn){
  die("Sorry your connection is Failed:".mysqli_connect_error());
}
else{
  echo "Connection was succesfuly";
}

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
    <link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <footer>
    <div class="main-content">
      <div class="left box">
       <section id="About us"> <h6>About us</h6></section>
        <div class="content">
          <span>Welcome to a Realtime chatting website in this website you will capable to chat. This is a secure&#128274; when you chat anyone no one can see&#128584; your chat or I say it will not brought caste to everyone your chat no one can seen&#128584; without your &#x1f4e7;Email and &#128272;Passwords and on one can use your Email multiple time.In this website you will chat any one like with your friends, any random person, and etc.. But you can not send photos,video,calls and etc... In future we will adds all this features. Enjot It &#128526; &#128526; &#128526;.</span>
          <div class="social">
            <a href="#"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="#"><span class="fab fa-instagram"></span></a>
            <a href="#"><span class="fab fa-youtube"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="admin/"><span class="fas fa-solid fa-user"></span></a>
          </div>
        </div>
      </div>

      <div class="center box">
        <h6>Address</h6>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Gujarat,Vapi</span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+91-8303954723</span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>        
            <span class="text">shubhamky1612@gmail.com</span>
          </div>
        </div>
      </div>
      
      <div class="right box">
        <section id="contact"><h6>Contact us</h6></section>
        <div class="content">
          <form method="POST">
            <div class="email2" style="position: relative; top:4rem;">
              <div class="net" style="color:#fff;" >Email *</div>
              <input type="email" name="email" required style="position: relative; top:-1rem; color:#fff;" required>
            </div>
            <div class="msg" style="position: relative; top:2.6rem;">
              <div class="net" style="color:#fff;" >Message *</div>
              <textarea name="message" rows="2" cols="25" required style="color:#fff;" required></textarea>
            </div>
            <div class="btn" style="position: relative; top:2.7rem; ">
              <button type="submit" style="border-radius:20px;" name="submit">Send</button>
            </div>
</form>
        </div>
      </div>
    </div>
   
  </footer>   

  </body>
</html>
