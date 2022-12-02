<?php

function roundHalfUp($numero){
    $resto = fmod($numero, 1);
    if($resto > .5){
        $numero = floor($numero) + 1;
    } else if($resto > 0 && $resto < .5){
        $numero = floor($numero) + .5;
    } else if($resto == .5){
        $numero = $numero;
    } else {
        $numero = round($numero, 0);
    }
    return $numero;
}

echo roundHalfUp(7);
echo ' - ';
echo roundHalfUp(7.01);
echo ' - ';
echo roundHalfUp(7.5);
echo ' - ';
echo roundHalfUp(7.7);
echo ' - ';
echo roundHalfUp(8.2);
echo ' - ';
echo roundHalfUp(8.7);
echo ' - ';