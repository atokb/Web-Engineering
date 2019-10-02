<?php 
    $items = array("LEAN N' SASSY", "SCORCHED", "IGNITOR", "HEX 6000 CREATINE", "FEMME FIT", "GROW MASS GAINER");
    $images = array("lean-sassy", "Scorched", "Ignitor", "Hex-", "Femme-Fit", "Grow");
    foreach(images as image) {
        echo "<img src='/img/$image.jpg'> <br>";
    }
    $price = array("$59.95", "$54.95", "$60", "$34.95", "$69.95", "$79.95");

    //Load Session
if (!isset($_SESSION["total"]) ) {
    $_SESSION["total"] = 0;
    for ($i=0; $i< count($items); $i++) {
      $_SESSION["images"][$i] = 0;
      $_SESSION["qty"][$i] = 0;    
      $_SESSION["price"][$i] = 0;
    }
  }
  
  //Reset
  if ( isset($_GET['reset']) )
  {
  if ($_GET["reset"] == 'true')
    {
    unset($_SESSION["qty"]);
    unset($_SESSION["images"]);
    unset($_SESSION["price"]);
    unset($_SESSION["total"]);
    unset($_SESSION["cart"]);
    }
  }
  
  //Add
  if ( isset($_GET["add"]) )
  {
  $i = $_GET["add"];
  $qty = $_SESSION["qty"][$i] + 1;
  $_SESSION["price"][$i] = $price[$i] * $qty;
  $_SESSION["cart"][$i] = $i;
  $_SESSION["qty"][$i] = $qty;
  }
  
  //Delete
  if ( isset($_GET["delete"]) )
  {
  $i = $_GET["delete"];
  $qty = $_SESSION["qty"][$i];
  $qty--;
  $_SESSION["qty"][$i] = $qty;
  if ($qty == 0) {
   $_SESSION["price"][$i] = 0;
   unset($_SESSION["cart"][$i]);
  }
  else
  {
  $_SESSION["price"][$i] = $price[$i] * $qty;
  }
  }
?>