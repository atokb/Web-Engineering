<?php 
    $products = array("LEAN N' SASSY", "SCORCHED", "IGNITOR", "HEX 6000 CREATINE", "FEMME FIT", "GROW MASS GAINER");
    $images = array("");
    $prices = array("$59.95", "$54.95", "$60", "$34.95", "$69.95", "$79.95");

    for($x = 0, $x < $products.length, $++) {
        echo $products[$x];
        echo "<br>"
    }
?>