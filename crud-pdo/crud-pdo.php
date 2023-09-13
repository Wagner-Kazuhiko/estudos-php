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

/*
$pdo->query("INSERT INTO pessoa(nome, telefone, email) VALUES('Paulo', '22222222', 'paulo@gmail.com')");
*/

/*DELETE E UPDATE*/

/*
$cmd = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
$id = 2;
$cmd->bindValue(":id", $id);
$cmd->execute();


$res = $pdo->query("DELETE FROM pessoa WHERE id = '3'");
*/

/*
$cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :id");
$cmd->bindValue(":e", "miriam@email.com");
$cmd->bindValue(":id", 1);
$cmd->execute();
*/
/*
$res = $pdo->query("UPDATE pessoa SET email = 'paulo@hotmail.com' WHERE id = '4'");
*/

/*------------------SELECT------------------------*/

$cmd = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
$cmd->bindValue(":id", 4);
$cmd->execute();
$resultado = $cmd->fetch(PDO::FETCH_ASSOC); //ou fetchAll();

foreach($resultado as $key => $value){
    echo $key.": ".$value."<br>";
}

?>