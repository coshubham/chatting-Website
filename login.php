
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="shortcut icon" href="chatting.png" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="jquery-3.6.0.js"></script>
</head>
<body>

	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="img5.jpg">
		</div>

		<div class="login-content">
	<form action="#" autocomplete="off">
				<img src="avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email Address</h5>
           		   		<input type="text" name="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="om">
           		    	<h5>Password</h5>
           		    	<input type="password" id="password" name ="password"class="input">
						   <i id="visibilityBtn"class="fas fa-eye"></i>
            	   </div>
            	</div>
				<a href="index.php">
            	<p class="ram">Not Yet Signed up? <span style="color:#00e6f6";>Signup Now</span>
				<i class="fas fas fa-long-arrow-alt-right" style="color:#00e6f6; font-size:1.2rem; position: relative; top:3.6px;";></i>
				</p>
				</a>
				<div class="filed button">
            	<input type="submit" class="btn" value="Continue to Chat">
				</div>
				<div class="error-txt"></div>  
            </form>
        </div>
    </div>
    <script type="text/javascript" src="javascript/login2.js"></script>
	<script src="javascript/pass-show-hide.js"></script>
	<script src="javascript/login.js"></script>
</body>
</html>
