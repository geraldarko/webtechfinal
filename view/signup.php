
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SignUp</title>
		<link rel="stylesheet" type="text/css" href="../auth_css/style.css">
		<link rel="stylesheet" type="text/css" href="../auth_css/bootstrap.min.css">
		
	</head>

	<body>
		<div class="container-fluid">
			<div class="row login-box">
				<h1>SignUp</h1>
				<form action="register_process.php" method="POST" class="row">
					<div class="textbox">
					<input type="text" placeholder="Your Full Name..." name="name">
				</div>
				<div class="textbox">
					<input type="email" placeholder="Your Email Address(example@yahoo.com)" name="email">
				</div>
				<div class="textbox">
					<input type="number" placeholder="Your Phone Number..." name="phone">
				</div>
				<div class="textbox">
					<input type="password" placeholder="Your Password..." name="password">
				</div>
				<div class="textbox">
					<input type="password" placeholder="Confirm Password..." name="cpassword">
				</div>
				
				<input id="btn" type="submit" name="signupbtn" value="Sign Up">

				</form>
				
				<hr>
				<p class="row">Already Have An Account? <a href="login.php">Log In</a></p>

			</div>

		</div>

		<script type="text/javascript" src="../auth_js/bootstrap.min.js"></script>

	</body>
</html>