<?php
    $cars = array(
        array("VW", "VW" => "Gol", "Fox", "Fox2", "Fox3"),
        array("GM", "CarroGM1", "CarroGM2", "CarroGM3", "CarroGM4"),
        array("Fiat", "Palio", "500", "Uno", "Mobi"),
        array("Ford", "EcoSport", "Fiesta", "Ranger", "Ford T")
    );

    echo $cars[0][4]."<br>", $cars[2][1]."<br>", $cars[3][2]."<br>";
?>