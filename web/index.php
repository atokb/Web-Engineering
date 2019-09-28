<?php
$currentPage = 'home';
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
  <title>King FiiIV</title>
</head>
<body>
  <?php
    include('header.php');
  ?>
  <div class="jumbotron">
      <h1>Akwaaba(Welcome)</h1>
      <hr>
        <img class="image" src="/files/me.JPG" alt="myself">
        <h3>Who I Am</h3>
        <p>
            My name is Kenneth Ato Brown<br>
            I started studying Web Development after I enrolled in BYU-Idaho's online program; which was made possible through BYU-Pathway<br>
            My interest in the web came as a result of my desire to pursue a degree that would allow me work remotely, and my realization of how I analyzed websites I visited and thought of how they could be improved.<br>
            In Ghana; where I come from, many people love using technology, but most people gear towards software or computer science, because of the current demand.<br>
            I therefore saw the web as an option which would be a future benefit; since it's possibilities such as web apps, e-commerce, API's etc, has not really been explored much in Ghana.<br>
            Listening to music, dancing, playing soccer, running, singing, and exploring new things are some of the things I love to do, when I get some time away from coding.
        </p>
        <?php
        include('navigation.php');
        ?>
  </div>
</body>
</html>