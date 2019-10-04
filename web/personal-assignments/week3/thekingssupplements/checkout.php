<?php
session_start();
$currentPage = 'checkout';

include('products.php');
include('customer-info.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
      <link rel="stylesheet" type="text/css" href="/main.css">      
      <title>The King's Supplements | Checkout</title>
  </head>
  <body class="jumbotron">
    <?php
    include('header.php');
    ?>
    <?php
    if ( isset($_SESSION["cart"]) ) {
    ?>
    <div>
      <div class="container">
        <h2>Checkout</h2>
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
          </tr>
          <?php
          $total = 0;
          foreach ( $_SESSION["cart"] as $i ) {
          ?>
          <tr>
            <td><?php echo( $items[$_SESSION["cart"][$i]] ); ?></td>
            <td>&nbsp;</td>
            <td><?php echo( $_SESSION["images"][$i] ); ?></td>
            <td>&nbsp;</td>
            <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
            <td>&nbsp;</td>
            <td><?php echo( $_SESSION["price"][$i] ); ?></td>
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
      </div>
      <hr>
      <div class="container">
        <form action=<?php echo htmlspecialchars("confirmation.php");?> method="post">
          <div class="col-50">
            <h3>Billing Information</h3>
            <div class="form-group">
              <label for="firstname"><i class=""></i> First Name</label>
              <input class="form-control" type="text" name="firstname" placeholder="first name" value="<?php echo htmlspecialchars($firstname) ?>" required>
              <span class="error"> <?php echo $firstnameErr;?></span>
            </div>
            <div class="form-group">
              <label for="lastname"><i class=""></i> Last Name</label>
              <input class="form-control" type="text" placeholder="last name" value="<?php echo htmlspecialchars($lastname) ?>" required>
              <span class="error"><?php echo $lastnameErr;?></span>
            </div>
            <div class="form-group">
              <label for="email"><i class=""></i> Email</label>
              <input class="form-control" type="email" name="email" placeholder="email" value="<?php echo htmlspecialchars($email) ?>" required>
              <span class="error"><?php echo $emailErr;?></span>
            </div>
            <div class="form-group">
              <label for="address"><i class=""></i> Address</label>
              <input class="form-control" type="text" name="address" placeholder="address" value="<?php echo htmlspecialchars($address) ?>" required>
              <span class="error"><?php echo $addressErr;?></span>
            </div>
            <div class="form-group">
              <label for="city"><i class=""></i> City</label>
              <input class="form-control" type="text" name="city" placeholder="city" value="<?php echo htmlspecialchars($city) ?>" required>
              <span class="error"><?php echo $cityErr;?></span>
            </div>
            <div class="form-group">
              <label for="state">State</label>
              <input class="form-control" type="text" name="state" placeholder="state" value="<?php echo htmlspecialchars($state) ?>" required>
              <span class="error"><?php echo $stateErr;?></span>
            </div>
            <div class="form-group">
              <label for="zip">Zip</label>
              <input class="form-control" type="number" name="zip" placeholder="zip" value="<?php echo htmlspecialchars($zip) ?>" required>
              <span class="error"><?php echo $zipErr;?></span>
            </div>
            <div class="form-group">
              <label for="country">Country</label>
              <input class="form-control" type="text" name="country" placeholder="country" value="<?php echo htmlspecialchars($country) ?>" required>
              <span class="error"><?php echo $countryErr;?></span>
            </div>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
        <div>
      </div>
       <a class='btn btn-info btn-sm btn-space role='button' aria-pressed='true' href="cart.php">Return to Cart</a>
      </div>
    </div>
  </body>
</html>