<?php
    $entrada = array('A: XXXXX', 'B: XXXXX', 'C: XXXXX');
    $troca = array('ALTA', 'MÉDIA', 'BAIXA');
    echo "Classes Sociais:<br>";
    
    foreach($entrada as $key => $value){
        $aux = str_replace('XXXXX', $troca[$key], $value);

        echo "$aux.<br>";
    }
?>