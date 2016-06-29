<html><body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

echo 'Hello navigator! Hai le mappe aggiornate?!';
// booleano
$boolean = false;
// interi
$intero_decimale = 7;
$intero_ottale = 0.4545;
$intero_esadecimale = 0xffff;
$intero_binario = 0b010100;
# float
$float = 0.548;
$float1 = 6.658e2;
# string
$string = 'Ciao';
$string2 = "it's me"; # se uso \n tra i doppi apici viene interpretato come 'a capo'
$string[0] = 'c';

# funzioni su stringhe
//echo strlen($string);
//echo strpos($string, 'cia')>= 0;
// $string2 = <<<TESTO 
//     prova stringa
//     su più righe.
// TESTO;

/* 
commento
*/

# array in php sono sempre costituiti da coppie chiave- valore
$array1 = array('a' => 1,'b' => 2,'c' => 3);
$array2 = [1,2,3];
var_dump($array1['a']);
#funzioni con array
// unset($array2[1]);
// isset($array2[1]);
// count($array1);
// is_array($array1);
// $b = array_reverse($array2);
// $a = array_merge($array1, $array2);
// rsort($array2);
// $ks = array_keys($array2);

# type e cast
$var = ''; // viene considerata false
$var1 = '()'; // viene considerata false

const COSTANTE = 'pippo';



?> <!-- omettere il tag di chiusura nel caso in cui avessi solo codice php nel file -->

</body>
</html>