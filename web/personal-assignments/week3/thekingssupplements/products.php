<?php 
    $products = array("LEAN N' SASSY", "SCORCHED", "IGNITOR", "HEX 6000 CREATINE", "FEMME FIT", "GROW MASS GAINER");
    $images = array("lean-sassy", "Scorched", "Ignitor", "Hex-", "Femme-Fit", "Grow");
    foreach(images as image) {
        echo "<img src='/img/$image.jpg'> <br>";
    }
    $prices = array("$59.95", "$54.95", "$60", "$34.95", "$69.95", "$79.95");

    for($x = 0, $x < $products.length, $++) {
        echo $products[$x];
        echo "<br>"
    }
?>