<?php
$currentPage = 'soak-home';

session_start();

include 'db.php';

$message="";
if(count($_POST)>0) {
	$conn = 'db.php';
	$result = mysqli_query($conn,"SELECT * FROM users WHERE user_name='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "You are successfully authenticated!";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>SOA-King</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="soak.php">Strength Of A King</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php if($currentPage == 'soak-home') echo 'bg-info'; ?>" href="soak.php">Home<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron">    
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form" method="post" action="soak_start.php">
					<span class="login100-form-title p-b-26">
						Login Here
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
					<div class="message"><?php if($message!="") { echo $message; } ?>Valid?</div>
					<div class="wrap-input100">
					<!-- <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c"> -->
						<input class="input100" type="text" name="email" required>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100">
					<!-- <div class="wrap-input100 validate-input" data-validate="Enter password"> -->
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" required>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								<a href="soak_start.php"> Login </a>
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="soak_signup.php">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
        </div>
  </div>
</body>
</html>