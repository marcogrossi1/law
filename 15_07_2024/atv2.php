<?php
    $array1 = ['R', 'a', 'y', 'n', 'n', 'e'];
    $array2 = [82, 97, 121, 110, 110, 101];

    $array3 = array_combine($array1, $array2);

    ksort($array3);
    print_r($array3);
?>      