<?php


    // esempio funzioni annidate in funzioni
    
    if (true) {
        
        function prova($string1, $string2 = 'Peveri'){
            function prova2($string){
                return strtoupper($string);
            }
            return $string1.' '.$string2;
        }
        
    }
    
    $a = prova('Silvia');
    $a = prova2($a);
    var_dump($a);

    
    // esempio funzione ricorsiva
    // funzione che richiama se stessa al suo interno
    
    function decremento($intero){
        var_dump($intero);
        $intero--;
        if ($intero > 0)
        decremento($intero);
    }
    
    decremento(10);
    
    // somma
    
    function params ($base){
        //var_dump(func_num_args());
        //var_dump(func:get_arg(1));
        //$a = 0;
        for($i=1, $n = func_num_args(); $i < $n; $i++):
            $base += (int) func_get_args()[$i];
        endfor;
        return $base;
    }
    
    var_dump(params(20,1,2,3));
    