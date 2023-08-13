<?php
$idade = 20;

function modifica(&$a){
    echo 'Internamente (antes): ' . $a . '<br>';
    $a = 100;
    echo 'Internamente (depois): ' .$a . '<br>';
}

echo $idade . '<br>';
modifica($idade);
echo $idade;

?>