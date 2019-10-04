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
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="../../../bootstrap.min.css">
    <title>The King's Supplements</title>
</head>
<body class="jumbotron">
        <?php include('header.php');
        ?>
     <hr>
   <div class="products">
   <h2>Products</h2>
   <?php 
        for ($i=0; $i < count($items); $i++) {
     ?>
          <ul class="list-group">
          <li class="list-group-item"><?php echo ($images[$i]) . '<br><p class="h2">' .($items[$i]) . ' $' . ($price[$i]) . '</p>'?></li>
          <br>
          <li>
          <a class="btn btn-primary btn-sm btn-space" role="button" aria-pressed="true" href="?add=<?php echo($i); ?>">Purchase</a>Qty in Cart <?php echo( $_SESSION["qty"][$i] ); ?>
        </li>
          </ul>        
     <?php
        }
     ?>
   </div>
   <hr>
   <div>
     <a class='btn btn-info btn-sm btn-space role='button' aria-pressed='true'' href="cart.php">View Cart</a>  
   </div>
</body>
</html>