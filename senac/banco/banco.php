<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'admin', 'Admin@1234');
$resultado = $db->query('SELECT * FROM usuarios');
$linha = $resultado->fetch();

echo $linha['nome'];
?>