<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>

    <form method="post" action="calculoimc.php">
        <label for="peso">Peso (kg): </label>
        <input type="number" step="0.01" name="peso" id="peso" required><br>
        
        <label for="altura">Altura (m): </label>
        <input type="number" step="0.01" name="altura" id="altura" required><br>
        
        <button type="submit">Calcular IMC</button>
    </form>

    <?php
    function calcularIMC($peso, $altura) {
        $imc = $peso / ($altura * $altura);
        return $imc;
    }

    function classificarIMC($imc) {
        
        $faixas = array(
            array(0, 18.5, "Magreza"),
            array(18.51, 24.9, "Saudável"),
            array(25.0, 29.9, "Sobrepeso"),
            array(30.0, 34.9, "Obesidade Grau I"),
            array(35.0, 39.9, "Obesidade Grau II"),
            array(40.0, PHP_FLOAT_MAX, "Obesidade Grau III")
        );
    
        foreach ($faixas as $faixa) {
            if ($imc >= $faixa[0] && $imc <= $faixa[1]) {
                echo "Atenção, seu IMC é $imc, e você está classificado como {$faixa[2]}.";
                return;
            }
        }
    
        echo "Não foi possível determinar a classificação do IMC.";

    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $peso = floatval($_POST["peso"]);
        $altura = floatval($_POST["altura"]);

        if ($peso > 0 && $altura > 0) {
            $imc = calcularIMC($peso, $altura);
            echo "Seu IMC é: " . number_format($imc, 2) . "<br>";
            classificarIMC($imc);
        } else {
            echo "Peso e altura devem ser valores positivos.";
        }
    }
    ?>

</body>
</html>
