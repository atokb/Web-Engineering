<?php
$currentPage = 'assignments';
?>


<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Assignments</title>

</head>
<body>
    <header>
    <?php
        include('header.php');
    ?>
  </header>

<div class="jumbotron">
<hr>
    <h1>Y3 Wo Ha (We are Here)</h1>
    <hr>
    <div>
      <a class="btn btn-primary btn-lg btn-space role="button" aria-pressed="true"" href="./personal-assignments/week3/thekingssupplements/thekingssupplements.php">The King's Supplements</a>
      <a class="btn btn-primary btn-lg btn-space role="button" aria-pressed="true"" href="./personal-assignments/soak/soak.php">Strength of a King</a>
      <a class="btn btn-primary btn-lg btn-space role="button" aria-pressed="true"" href="./personal-assignments/umotivate/um.html">UMotivate</a>
    </div>
    <hr>
    <div>
    <?php
        include('navigation.php');
        ?>
    </div>
</div>

</body>
</html>