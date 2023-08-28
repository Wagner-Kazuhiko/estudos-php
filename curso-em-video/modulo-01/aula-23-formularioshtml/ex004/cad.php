<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 

            $nome = $_GET["nome"] ?? "sem nome"; /* $_REQUEST == junção de $_GET, $_POST e $_COOKIES */
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer <strong>$nome $sobrenome</strong>, este é o meu site.</p>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar pra a página anterior</a></p>
    </main>
    
</body>
</html>