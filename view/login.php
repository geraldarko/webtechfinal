
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LogIn</title>
		<link rel="stylesheet" type="text/css" href="../auth_css/style.css">
		<link rel="stylesheet" type="text/css" href="../auth_css/bootstrap.min.css">
		
	</head>
	<body>
		<?php
		require_once("../controllers/users_controller.php");
		session_start();
		error_reporting(0);
		if (isset($_POST['loginbtn'])){
			$emailadd = $_POST['email'];
			$pwd = md5($_POST['password']);

			$login=login_user($emailadd, $pwd);
			if($login){
				$user = array();
				$user = select_user($emailadd);
				$_SESSION['name'] = $user['name'];
				$_SESSION['user_id'] = $user['id'];
				echo "<script>alert('Log in Success.');
				window.location.href='../index.php';
				</script>";
			}else{
				echo "<script>alert('Email or Password invalid.')</script>";
			}	

			if ( empty($emailadd) OR empty($pwd)){
				echo "<script>alert('Both fields are required.')<script/>";
			}
		}

		 ?>
		<div class="container-fluid">
			<div class="row login-box">
				<h1>Log In</h1>
				<form action="login.php" class="row" method="post">
					<div class="textbox">
					<input type="email" placeholder="Enter your Email"  name="email">
				</div>
				<div class="textbox">
					<input type="password" placeholder="Enter your Password"  name="password">
				</div>
				
				<input  id="btn" type="submit" name="loginbtn" value="LogIn">
				</form>
				
				<hr>
				<p class="row">Don't Have An Account? <a href="signup.php">Sign Up</a></p>

			</div>

		</div>

		<script type="text/javascript" src="../auth_bootstrap.min.js"></script>

	</body>
</html>