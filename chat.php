<?php
 session_start();
 if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="chatting.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHATTING WEBSITE</title>
    <link rel="stylesheet" href="user.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
            <?php
                include 'php/config.php';
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>

                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <div class="content">
                <img src="php/images/<?php echo $row['img'] ?>" alt="">
                 <div class="info">
                 <span><?php echo $row['fname'] ." ". $row['lname'] ?></span>
                 <p><?php echo $row['status'] ?></p>
                  </div>
                  </div>
            </header>
            <div class="chat-box">
               
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a Message here.......">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <script src="javascript/chat.js"></script>
</body>
</html>