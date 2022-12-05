<?php
session_start();
include('../data.php');
$msg = '';

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$username = mysqli_real_escape_string($link,trim($_POST['email']));
		$pass = mysqli_real_escape_string($link,trim($_POST['password']));
		
		if($username  == '' || $pass == ''){
			
			$msg = 'Please complete the empty fields';
			
			}
			
			if($username == 'Admin' || $username == 'admin' || $username == 'ADMIN'){
			
			$msg = 'You cannot use this username';
		}
		
		if($msg == ''){
		$pass = md5($pass);
		
		$loginstatus = 0;
		$status = 1;
		
		$sql = "SELECT * FROM admin WHERE email = '$username' AND password = '$pass' AND status = '$status' LIMIT 1";
		$query = mysqli_query($link,$sql) or die(mysqli_error($link));
		$rowValue = mysqli_fetch_assoc($query);
		$rowNumber = mysqli_num_rows($query);
		
		if($rowNumber == 1){
			
			
				$_SESSION['key'] = $rowValue['sn'];
				header('Location: controlpanel.php');
			
				}
			
			else{
				
				$msg = 'Invalid username or password';
				//header('Location: reg.php');
			}
			
		}
		
		}
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>Anglican College Owerrinta - Admin</title>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="x-ua-compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/plugins/themify/themify-icons.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style00e0.css">


</head>

<body><div id="page-container2">
<div class="page-helper">
<div class="form-container">
<div class="logo mb-4">
				<img src="assets/images/logo.png" alt="">
			</div>
			<form action="" method="post">
	  <div class="login-box">

				<p class="mb-4">Welcome, Anglican College Admin Login</p>
              <p class="mb-4"><font color="#FF0000"><?php echo $msg; ?></font></p>
				
			  <div class="form-group">
			    <label for="email">Email address</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
    </div>
				
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password">
				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<div class="form-check">
								
							</div>
						</div>
					</div>
					
				</div>

				<button type="submit" class="btn btn-block btn-alt-primary">Sign in</button>

				<div class="text-muted">Don't have account? <a href="javascript:void(0)">login</a></div>

			</div>
			</form>
		</div></div>
</div></body>

</html>