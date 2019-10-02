<?php 
    session_start ();
    $currentPage = 'supplementHome';

    include('products.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>The King's Supplements</title>
</head>
<body class="jumbotron">
        <?php include('header.php');
        ?>
   <div>
   <h2>Products</h2>
   <?php 
        for ($i=0; $i < count($items); $i++) {
   ?>
    <ul>
        <?php echo "<li>$items[$i]</li><br>"; ?>
    </ul>
   </div>
</body>
</html>