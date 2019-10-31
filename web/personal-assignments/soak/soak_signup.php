<?php
$currentPage = 'soak-signup';

include 'db.php';

if (isset($_POST['firstName']))
{
	$firstname = $_POST['firstName'];
	$lastname = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$pass = password_hash($password, PASSWORD_DEFAULT);

try{
$stmt = $db->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)');
$stmt->execute(array(':first_name' => $firstname, ':last_name' => $lastname, ':email' => $email, ':password' => $pass));

if($stmt->rowCount() == 1){
	$message = "Registration Successful<br>
	Go to <a href='soak.php'>Login</a>
	";
}
}
catch(PDOException $ex){
	$message = "An error occured".$ex->getMessage();
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
    <title>SOA-King - Signup</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="soak.php">Strength Of A King</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php if($currentPage == 'soak-home') echo 'bg-info'; ?>" href="soak.php">Home 
			<span class="sr-only">(current)</span>
		</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="jumbotron"> 
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="">
				<span class="text-danger">
					<?php if(isset($message)) echo $message ?>
				</span>
					<span class="login100-form-title p-b-26">
						Sign Up Here
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

          			<div class="wrap-input100 validate-input" data-validate = "Enter a valid name">
						<input class="input100" type="text" name="firstName">
						<span class="focus-input100" data-placeholder="First Name"></span>
					</div>

          			<div class="wrap-input100 validate-input" data-validate = "Enter a valid name">
						<input class="input100" type="text" name="lastName">
						<span class="focus-input100" data-placeholder="Last Name"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="soak.php">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    </div>
	
</body>
</html>