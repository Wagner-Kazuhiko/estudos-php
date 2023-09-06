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
        <h1></h1>
    </header>

    <main>
        <?php

        if(isset($_GET["moeda"])){

            $coinId = 'bitcoin';
            $currency = 'usd';

            $real = floatval($_GET["moeda"]);

            $inicio = date("m-d-y", strtotime("-7 days"));
            $fim = date("m-d-y");
            $url = $url = "https://api.coingecko.com/api/v3/simple/price?ids=$coinId&vs_currencies=$currency&date=$inicio&date=$fim";

            $response = file_get_contents($url);
            $data = json_decode($response, true);

            if(isset($data[$coinId][$$currency])){
                $bitcoinPrice = $data[$coinId][$currency];
                $bitcoinEquivalent = $realValue /$bitcoinPrice;

                echo "Valor em Reais: R$ $realValue<br>";
                echo "Preço do Bitcoin em USD: $bitcoinPrice<br>";
                echo "Equivalente em Bitcoin: $bitcoinEquivalent BTC";
            } else {
                echo "Não foi possível obter o preço do Bitcoin.";
            }

        }
        ?>
    </main>
    
</body>
</html>