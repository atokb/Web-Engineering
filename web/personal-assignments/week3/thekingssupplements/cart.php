<?php 
    session_start();
    $currentPage = 'supplementCart';

    include('products.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">   
      <link rel="stylesheet" href="../../../bootstrap.min.css">      
      <link rel="stylesheet" type="text/css" href="/main.css">      
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>The King's Supplements | Cart</title>
  </head>
  <body class="jumbotron">
    <?php
    include('header.php');
    if ( isset($_SESSION["cart"]) ) {
    ?>
    <div class="cart">
      <h2>Your Cart</h2>
      <table>
        <tr>
          <th>Items</th>
          <th>&nbsp;</th>
          <!--images-->
          <th></th>
          <th>&nbsp;</th>
          <th>Qty</th>
          <th>&nbsp;</th>
          <th>Price</th>
          <th>&nbsp;</th>
          <th>Action</th>
        </tr>
        <?php
        $total = 0;
        foreach ( $_SESSION["cart"] as $i ) {
        ?>
        <tr>
          <td><?php echo( $items[$_SESSION["cart"][$i]] ); ?></td>
          <td>&nbsp;</td>
          <!-- <td><?php echo( $_SESSION["images"][$i] ); ?></td> -->
          <td>&nbsp;</td>
          <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
          <td>&nbsp;</td>
          <td><?php echo( $_SESSION["price"][$i] ); ?></td>
          <td>&nbsp;</td>
          <td><a class='btn btn-danger btn-sm btn-space role='button' aria-pressed='true' href="?delete=<?php echo($i); ?>">Remove</a></td>
        </tr>
        <?php
        $total = $total + $_SESSION["price"][$i];
        }
        $_SESSION["total"] = $total;
        ?>
        <tr>
          <td colspan="7">Total Price : <?php echo($total); ?></td>
        </tr>
      </table>
      <?php
      }
      ?>
      <div>
        <a class='btn btn-danger btn-sm btn-space role='button' aria-pressed='true' href="?reset=true" >Clear Cart</a>
      </div>
      <hr>
      <div class="column">
        <div>
          <a class='btn btn-info btn-sm btn-space role='button' aria-pressed='true' href="thekingssupplements.php">Continue Shopping</a>
        </div>
        <div>
          <a class='btn btn-info btn-sm btn-space role='button' aria-pressed='true' href="checkout.php">Proceed to Checkout</a>
        </div>
      </div>
    </div>
  </body>
</html>