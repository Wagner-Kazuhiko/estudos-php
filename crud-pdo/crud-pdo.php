<?php

/*
dbname
host
usuario
senha
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try{
    $pdo = new PDO("mysql:dbname=crudpdo;host=localhost", "admin", "Admin@1234");

}
catch (PDOException $e){
    echo "Erro com banco de dados: " .$e -> getMessage();
}
catch (Exception $e){
    echo "Erro genérico: " .$e -> getMessage();
}

/*-----------------------Insert----------------------------*/
/* 1 Forma */

/*
$res = $pdo->prepare("INSERT INTO pessoa(nome, telefone, email)
    VALUES (:n, :t, :e)");

$res->bindValue(":n", "Roberta");
$res->bindValue(":t", "11111111");
$res->bindValue(":e", "roberta@gmail.com");
$res->execute();

*/

/* 2 Forma */


$pdo->query("INSERT INTO pessoa(nome, telefone, email) VALUES('Paulo', '22222222', 'paulo@gmail.com')");


?>