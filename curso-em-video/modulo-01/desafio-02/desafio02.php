<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>

    <main>

        <?php 

            echo "Gerando um número aleatório entre 0 e 100... <br>";


            if(isset($_GET["botao"])){

                $number = rand(1, 100);

                echo "O valor gerado foi <strong>$number</strong><br>";
            }
            
        
        ?>

        <form method="get">
            <button type="submit" name="botao">Gerar outro</button>    
            
        </form>


    </main>
    
</body>
</html>