<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>

    <main>

        <?php 
            $number = $_GET["number"];
            $antecessor = $_GET["number"] - 1;
            $sucessor = $_GET["number"] + 1;
            echo "O número escolhido foi <strong>$number</strong> <br>";
            echo "O seu antecessor é <strong>$antecessor</strong><br>";
            echo "O seu sucessor é <strong>$sucessor</strong> <br>";

        ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>

    </main>
    
</body>
</html>