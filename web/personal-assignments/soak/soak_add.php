<?php
$currentPage = 'soak-add';

include 'db.php';

if (isset($_POST['routineName']))
{
	$routinename = $_POST['routineName'];
	$instructions = $_POST['instructions'];

try{
$stmt = $db->prepare('INSERT INTO routines (routine_name, routine_instructions) VALUES (:routine_name, :routine_instructions)');
$stmt->execute(array(':routine_name' => $routinename, ':routine_instructions' => $instructions));



if($stmt->rowCount() == 1){
	$message = "New Routine Added<br><br>
	Go to <a href='soak_routine.php'>Routines</a>
	";
}
}
catch(PDOException $ex){
	$erMessage = "An error occured".$ex->getMessage();
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
    <title>SOA-King - Add</title>
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
				<span class="text-success">
					<?php if(isset($message)) echo $message ?>
				</span>
				<span class="text-danger">
					<?php if(isset($erMessage)) echo $erMessage ?>
				</span>
				<br>
					<span class="login100-form-title p-b-26">
						Add a Routine
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

          			<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="routineName" required>
						<span class="focus-input100" data-placeholder="Routine Name"></span>
					</div>

                    <div class="form-group shadow-textarea">
						<span>Instructions</span>
                        <textarea class="form-control z-depth-1" id="instructions" name="instructions" rows="8" required></textarea>
                    </div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="custom-btn-bg"></div>
							<button type="submit" class="custom-btn">
								Add Routine
                            </button>
						</div>
                    </div>

                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                <a href="soak_routine.php">Cancel</a>
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
    </div>
	
</body>
</html>