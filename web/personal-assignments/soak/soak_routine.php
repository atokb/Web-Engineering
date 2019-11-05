<?php
$currentPage = 'soak-start';

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <link rel="stylesheet" href="main.css">
    <title>SOA-King - Start</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="soak.php">Strength Of A King</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php if($currentPage == 'soak-home') echo 'bg-info'; ?>" href="soak.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
    <div class="jumbotron"> 
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="soak_start.php">
					<span class="login100-form-title p-b-26">
						Here is Your Current Royal Routine
					</span>
          <br>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font">
              <?php $statement = $db->query('SELECT routine_name, routine_instructions FROM routines r JOIN goals_weight_category gwc ON routine_id = goals_weight_category_id WHERE routine_id = goals_weight_category_id');
                while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                {
                echo '<h2>' . $row["routine_name"] .'</h2>' .  '<h4>Instructions</h4><p>' . $row["routine_instructions"] . '</p><br>';
                }
              ?></i>
          </span>
          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="change">Change Goal</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
    </div>
	
</body>
</html>