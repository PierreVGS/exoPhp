<?php
    include'./vehicule.php';

    $voiture = new Vehicule("Mercedes glk",4,250);
    $moto = new Vehicule("Honda cbr",2,280);

    $voiture->detect();

    echo "<br>";
    
    $moto->detect();
?>