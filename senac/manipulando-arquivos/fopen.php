<?php

$fh = fopen('img/teste.txt', 'r');
if($fh){
    fclose($fh);
}

$fh = fopen('img/teste2.txt', 'w+');
if($fh){
    fclose($fh);
}

$fh = fopen('img/teste3.txt', 'x+');
if($fh){
    fclose($fh);
}

$fh = fopen('img/teste3.txt', 'x');
if($fh){
    fclose($fh);
}

?>