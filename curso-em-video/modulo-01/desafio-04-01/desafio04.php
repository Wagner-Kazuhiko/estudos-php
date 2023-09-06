<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Conversor de Moedas v2.0</h1>
</header>

<main>
    <?php
        $dinheiro = number_format($_GET["number"], 2);
        $url = '{"@odata.context":"https://was-p.bcnet.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata$metadata#_CotacaoDolarPeriodo(cotacaoCompra,dataHoraCotacao)","value":[{"cotacaoCompra":4.96990,"dataHoraCotacao":"2023-09-05 13:02:32.338"}]}';

        $dados = json_decode($url, true);

        $cotação = $dados["value"][0]["cotacaoCompra"];
        
        $converter = number_format($_GET["number"] / $cotação, 2);

        echo "Seus R$ $dinheiro equivalem a  <strong>U$ $converter</strong><br><br>";
        echo "<strong>Cotação fixa de $cotação</strong> informada diretamente no código. <br><br>";

    ?>
    <input type="button" value="Voltar" onclick="history.go(-1)">

    
</main>
    
</body>
</html>