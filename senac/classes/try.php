<?php

function inverter($x){
    if($x == 0){
        throw new Exception('Divisão por zero');
    }
    return 1/$x;
}

try{
    echo inverter(10) . "<br>";
    echo inverter(0) . "<br>";
}
catch(Exception $e){
    echo "Um erro aconteceu :( <br>";
}
echo "Olá mundo <br>";
?>