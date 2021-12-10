<?php
	require_once('../controllers/users_controller.php');

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
		session_start();

		// error_reporting(0);
		if (isset($_POST['signupbtn'])){
			$name =  $_POST['name'];
			$emailadd = $_POST['email'];
			$number = $_POST['phone'];
			$pwd = md5($_POST['password']);
			$cpwd = md5($_POST['cpassword']);

			if (strlen($pwd) >= 8) {
				if (!ctype_lower($pwd) && !ctype_upper($pwd) && !ctype_space($pwd) && !ctype_digit($pwd)) {
					if($pwd==$cpwd){
						$result=select_user($emailadd);
						if($result){
						    echo "<script>alert('Email already exists in our database.')</script>";
					    }
					    else{
		                    $register = add_user($name, $emailadd, $number, $pwd);
		                    if ($register) {
		                        echo "<script>alert('Sign Up Completed.');
										window.location.href='login.php';
									</script>";
		                    }else{
		                        echo "failed";
		                        echo "<script>alert('Something went wrong.')</script>";
		                    }
					    }
					}else{
						echo "<script>alert('Password Not Matched')</script>";
					}
				}else{
					echo "<script>alert('Select A Stronger Password(eg. Aa1Bb2)')</script>";
				}
			}else{
				echo "<script>alert('Password Should Contain 8 or More Characters')</script>";
			}


			
			if (empty($name) OR empty($emailadd) OR empty($number) OR empty($pwd) OR empty($cpwd)){
				echo "<script>alert('All fields are required')</script>";
			}
		}else{
            echo "something went wrong";
        }
			

?>