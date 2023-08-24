<?php

function inverter($x){
    if($x == 0){
        throw new Exception('Divisão por zero');
    }
    return 1/$x;
}


try{
    echo inverter(0) . "<br>";
}
catch(Exception $e){
    echo "Um erro aconteceu :( <br>";
    echo "Detalhes do erro: <ul>";
    echo "<li>Código: " . $e -> getCode() . "</li>";
    echo "<li>Mensagem: " . $e -> getMesage() . "</li>";
    echo "</ul>";
}

?>