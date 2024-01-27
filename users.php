
<!DOCTYPE html>
<html lang="en">
<head>

<?php
 session_start();
 if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
 }
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="chatting.png" type="image/x-icon" />
    <title>CHATTING WEBSITE</title>
    <link rel="stylesheet" href="user.css" type="text/css" />
    <script src="jquery-3.6.0.js"> </script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php
                include 'php/config.php';
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <div class="content">
                 <img src="php/images/<?php echo $row['img'] ?>" alt="">
                 <div class="details">
                  <span><?php echo $row['fname'] ." ". $row['lname'] ?></span>
                  <p><?php echo $row['status'] ?></p>
                 </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select a user to start chat</span>
                <input type="text" placeholder="Enter name to search...."><i style="font-size:1.6rem; color:#333"; class="fas fas fa-long-arrow-alt-right"></i>

                <button><i class="fas fa-search"></i></button>
            </div><br>
            <div class="users-list">
               
            </div>
        </section>
    </div>
    <script src="javascript/users.js"></script>
</body>
</html>