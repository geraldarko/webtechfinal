<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="loginadmin.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="h-ttps://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <?php 
        session_start();
        require_once("../controllers/users_controller.php");
        if (isset($_POST['loginbtn'])) {
            $credential = $_POST['credential'];
            $loginpwd = $_POST['password'];

            $result=login_admin($credential, $loginpwd);
            if($result){
                // $_SESSION['name'] = $row['name'];
                $_SESSION['admin'] = $result['username'];
                header("Location: show.php");
            }else{
                echo "<script>alert('Invalid credentials.')</script>";
            }
        }
     ?>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required" name="credential">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="loginbtn">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
</div>
</body>
</html>