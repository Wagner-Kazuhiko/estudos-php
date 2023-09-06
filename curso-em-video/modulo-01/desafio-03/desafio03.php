<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Conversor de Moedas v1.0</h1>
</header>

<main>
    <?php
        $dinheiro = number_format($_GET["number"], 2);
        $cotacao = number_format(4.90, 2); 
        $converter = number_format($_GET["number"] / $cotacao, 2);

        echo "Seus R$ $dinheiro equivalem a  <strong>U$ $converter</strong><br><br>";
        echo "<strong>Cotação fixa de $cotacao</strong> informada diretamente no código. <br><br>";

    ?>
    <input type="button" value="Voltar" onclick="history.go(-1)">

    
</main>
    
</body>
</html>