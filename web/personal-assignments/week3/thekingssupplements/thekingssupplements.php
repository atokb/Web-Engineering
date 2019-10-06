<?php 
    session_start ();
    $currentPage = 'supplementHome';

    include('products.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php 
    include('head.php');
?>
<body class="jumbotron">
        <?php include('kingsheader.php');
        ?>
   <div class="products">
   <h2>Products</h2>
   <ul class="list-group list-inline">
   <?php 
        for ($i=0; $i < count($items); $i++) {
     ?>
          
          <li class="list-group-item list-inline-item"><?php echo ($images[$i]) . '<br><p class="h5">' .($items[$i]) . '<br> $' . ($price[$i]) . '</p>'?>
          <br>
          <span class="qty-style">Qty in Cart <?php echo( $_SESSION["qty"][$i] ); ?> </span>
          <br>
          <a class="btn btn-primary btn-sm btn-space" role="button" aria-pressed="true" href="?add=<?php echo($i); ?>">Purchase</a> 
          </li>
          <br>
               
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