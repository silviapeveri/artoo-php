<?php

$array = array (
    'Lu' => 'Lunedì',
    'Ma' => 'Martedì',
    'Me' => 'Mercoledì',
    'Gi' => 'Giovedì',
    'Ve' => 'Venerdì',
    'Sa' => 'Sabato',
    'Do' => 'Domenica',
    );
    
    $keys = array_keys($array);
    $val1 = $keys[0];
    var_dump($array[$val1]);
    $n = $keys[count($array)];
    $valpen = $keys[$n-2];
    var_dump($array[$valpen]);