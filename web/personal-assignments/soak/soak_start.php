<?php
session_start();

$currentPage = 'soak-start';

include 'db.php';

if (isset($_POST['Login']))
{
	$email = $_POST['email'];
	$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $stmt = $db->prepare('SELECT email, password FROM users WHERE email=:email');
    $stmt->execute(array(':email' => $email));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    if (password_verify($pass, $row['password'])) {
        $_SESSION['email'] = $email;
        header('location: soak_start.php');
    }
    else {
        header('location: soak.php');
    }
}
}

// else {
//     $message = "Wrong Username or password";
//     header('location: soak.php');
// }

// if(isset($_SESSION["email"])){
//     $Welcome = 'Welcome - '.$_SESSION["email"];
//     header("location: soak_start.php");
// }
// else{
//     header("location: soak.php");
// }

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
                        <form class="login100-form validate-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <span class="login100-form-title p-b-26">
                                Welcome to Your Royal Routine
                            </span>
                            <span class="login100-form-title p-b-48">
                                <i class="zmdi zmdi-font"></i>
                            </span>
                            <hr>

                            <div>
                                <h6>Select your Current Status to Proceed</h6>
                                <div></div>
                                <div class="wrap-input100 validate-input" data-validate = "Select a Weight Category">
                                    <label for="sel1">Weight Category</label>
                                    <select id="sel1" class="form-control" type="text" name="weight_category"> 
                                    <option value="Select Weight Range" selected disabled>Select Weight Range</option>
                                        <?php $statement = $db->query('SELECT * FROM weight_category');
                                                while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                                                {
                                                echo '<option value="' . $row["weightID"] .'">' .  $row["category"] . '</option>';
                                                }
                                        ?>
                                    </select>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Select a Fitness Goal">
                                    <label for="sel2">Fitness Goal</label>
                                    <select id="sel1" class="form-control" type="text" name="weight_category">
                                    <option value="Choose Goal" selected disabled>Choose Goal</option>
                                        <?php $statement = $db->query('SELECT * FROM goals');
                                                while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                                                {
                                                echo '<option value="' . $row["goals_id"] .'">' .  $row["goal"] . '</option>';
                                                }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn">
                                        <a href="soak_routine.php">	Become Royal</a>
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