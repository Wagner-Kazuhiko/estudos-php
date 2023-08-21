<?php

function inverter($x){
    if($x == 0){
        throw new Exception('Divisão por zero');
    }
    return 1/$x;
}

echo inverter(10) . "<br>";
echo inverter(0) . "<br>";
echo "Olá mundo <br>";

?>