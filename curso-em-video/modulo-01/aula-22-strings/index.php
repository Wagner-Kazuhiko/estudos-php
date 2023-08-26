<?php 

$nome = "Kaka";
$sobrenome = "Karakuri";
const ESTADO = "SP";
$nom = "Rodrigo";
$snom = "Nogueira";

echo '$nome $sobrenome';
echo "<br>";
echo "$nome $sobrenome";
echo "<br>";
echo '\u{1F596}';
echo "<br>";
echo "\u{1F596}";
echo "<br>";
echo "Moro no ESTADO";
echo "<br>";
echo 'Moro no ESTADO';
echo "<br>";
echo "Moro no " . ESTADO;
echo "<br>";
echo 'Moro no ' . ESTADO;
echo "<br>";
echo "Data: " . date('Y/M');
echo "<br>";
echo "$nom 'Minotauro' $snom";

?>