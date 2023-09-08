<?php 

$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'root');
$resultado = $db->query('SELECT * FROM usuarios');

$linha = $resultado->fetch();

echo $linha['nome'];

?>