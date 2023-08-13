<?php
$dobro = function($x){
    return $x * 2;
};

echo $dobro(5);

//array_map($dobro, [0,1,2]) == [0,2,4];

array_map(function($x){
    return $x * 2;
}, [0,1,2]);

?>