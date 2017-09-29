<?php

class Tarea{
    //Autor: Jim Vigo Castillo
    function MayorDosNumeros($n1,$n2){
        if($n1>$n2)
            return $n1;
        else
            return $n2;
    }
    //Autor: Jim Vigo Castillo
    function MenorDosNumeros($n1,$n2){
        if($n1<$n2)
            return $n1;
        else
            return $n2;
    }
    //Autor: Robert Castro Ugas
    function Factorial($numero){
        $factorial = 1;
        $contador = 1;
        while ($contador <= $numero){
            $factorial*=$contador;
            $contador++;
        }
        return $factorial;
    }
}
