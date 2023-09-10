<html>
<?php 
$name = $_GET["name"];
$age = $_GET["age"];
$job = $_GET["job"];

$nomeEmpregado = array($name, $age, $job);

print_r($nomeEmpregado);
?>
</html>
