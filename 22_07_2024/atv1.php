<?php
    $string1 = $_POST['atvA'];    
    $aux = array('a', 'e', 'i', 'o', 'u');

    $string1 = str_ireplace($aux, '?', $string1);

    echo '<b>1a) <br></b>';
    echo $string1; echo '<br>';
    echo strlen($string1); echo '<br>';
    echo strrev($string1); echo '<br><br>';

    $string2 = $_POST['atvB'];
    $string2Aux = substr($string2, -3);
    
    echo '<b>1b) </b>';
    echo $string2Aux; echo '<br><br>';

    $string3 = $_POST['atvC'];
    $string3Aux = explode('/', $string3);

    echo '<b>1c) </b>';
    echo 'Dia: '.$string3Aux[0]; echo '<br>';
    echo 'Mês: '.$string3Aux[1]; echo '<br>';
    echo 'Ano: '.$string3Aux[2]; echo '<br><br>';

    $string4 = $_POST['atvD'];
    $string4Aux = explode('.', $string4);
    $string4Aux2 = implode('.', array_reverse($string4Aux));

    echo '<b>1d) </b>';
    echo '<a href='.$string4Aux2.'>' . $string4Aux2 . '</a>'; echo '<br><br>';

    $string5 = $_POST['atvE'];
    $string5Aux = explode(' ', $string5);
    $aux2 = array('da', 'de', 'e');
    $string5Aux2 = "";

    foreach($string5Aux as $elemento){
        if(in_array(strtolower($elemento), array('e', 'de', 'da')))
            $string5Aux2 .= $elemento.' ';
        
        else
            $string5Aux2 .= ucfirst($elemento).' ';
    }
    
    echo '<b>1e) </b>';
    echo $string5Aux2; echo '<br> <br>';

    $string6Aux1 = $_POST['atvF1'];
    $string6Aux2 = $_POST['atvF2'];

    echo '<b>1f) </b>';
    echo preg_replace("/($string6Aux2)/i", "<b><font color='red'>$1</font></b>", $string6Aux1);
?> 