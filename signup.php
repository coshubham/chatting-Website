<!DOCTYPE html>
<html>
<head>
	<title>Sign up </title>
	<link rel="stylesheet" href="signup.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="jquery-3.6.0.js"></script>
	
</head>
<body>
	
<div class="container">  
	<div class="signup">
		<form action="#" enctype="multipart/form-data" autocomplete="off">
			
			<label>Sign up</label>
            <div class="error-txt"></div>  
			<div class="filed input">
                <input type="text" name="fname" placeholder="First Name" required>
			</div>
			<div class="filed input">
                <input type="text" name="lname" placeholder="Last Name" required>
			</div>
			<div class="filed inupt">
                <input type="email" name="email" placeholder="Email Address" required>
			</div>
			<div class="field input">
                <input type="password"id="password" name="password" placeholder="Create Password" required>
				<i id="visibilityBtn"class="fas fa-eye" class="sam"></i>
			</div>
			<div>
				<label class="file" style="border:none;">Select Image:-</label>
                <input type="file" class="file2" name="image" required>
			</div>

            <button type="submit" class="sign">Continue To Chat</button>

			<a href="login.php">
			<p>Already Signed up? <span style="color:#00e6f6">Login Now</span>
			<i class="fas fas fa-long-arrow-alt-right"></i>
			</p>
        </a>	
		</form>
	</div>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/sigup.js"></script>
</body>
</html>