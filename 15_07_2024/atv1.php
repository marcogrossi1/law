<?php
    $arr = [];

    for($i = 1; $i < 12; $i++)
        $arr[$i] = $_POST["palavra".$i];
    
    natsort($arr);
    for($i = 1; $i < 12; $i++)
        echo $arr[$i]."<br>";
?>