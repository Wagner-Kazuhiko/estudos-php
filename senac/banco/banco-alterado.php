<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'admin', 'Admin@1234');
$consulta = $db->query('SELECT * FROM usuarios');
$usuarios = $consulta->fetchAll();

echo '<h1>Lista de usuários</h1>';
echo '<ul>';
foreach($usuarios as $u){
    echo '<li>';
    echo $u['nome'] . ' - ' . $u['email'];
    echo '</li>';
}
echo '</ul>';

$linhas_afetadas = $db->exec("INSERT INTO `usuarios` (`email`, `nome`, `senha`) VALUES ('andre@dasilva.com', 'André', '456789')");

if($linhas_afetadas > 0){
    echo $linhas_afetadas . ' linhas foram afetadas';
} else {
    echo 'Nenhuma linha foi afetada!';
}
?>