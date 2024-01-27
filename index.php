<?php
session_start();
if(isset($_SESSION['unique_id'])){ // if user is logged in
    header("location: users.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='ico/favicon.ico' rel='icon'>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="php/footer.css">

    <link rel="shortcut icon" href="chatting.png" type="image/x-icon" />
    <link rel="stylesheet" href="Home.css">
    <script src="jquery-3.6.0.js"> </script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>CHATTING WEBSITE</title>
</head>
<body>
<section class="bg">
<div class="loading-text"></div>
<?php include 'navbar.html' ?>

<div class="image"></div>
<div class="flip">
    <h1 class="title">
        HELLO WELCOME TO CHATTING<br><br>
     WORLD A
    
     <div class="rotate-words">
        <span style="--d: .0s">REALTIME</span>
        <span style="--d: 3s">LIVE CHATTING</span>
        <span style="--d: 6s">WEBSITE</span>
        <span style="--d: 9s">ENJOY IT.</span>
    </h1>
    </div>
     </div>
     <button class="cta">
        Let's Go <i class="fas fa-arrow-right"></i>  
    </button>
    <?php include 'signup.php' ?> 
    
<?php include 'navbar2.html' ?> 
</div>

<?php include 'php/footer.php' ?>

 <!--BLUR JS-->
 <script>
        const loadText=document.querySelector('.loading-text')
        const bg = document.querySelector('.bg')

        let load = 0
        let int = setInterval(blurring, 22)
        function blurring(){
            load++
            if(load > 99){
                clearInterval(int)
            }
               loadText.innerText = `${load}%`
               loadText.style.opacity = scale(load, 0, 100, 1, 0)
               bg.style.filter = `blur(${scale(load, 0, 100, 30, 0)}px)`
        }

        const scale = (num, in_min, in_max, out_min, out_max) =>{
            return((num - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min
        }
    </script>

</body>
</html>