<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uma página php básica</title>
</head>
<body>
<?php 

    $url =  "http://www.google.com.br";
    $conteudo = file_get_contents($url);

    if($conteudo !== false){
        echo nl2br($conteudo); //n12br para preservar quebras de linha
    }
    else{
        echo "Não foi possível acessar a página.";
    }
?>

    
</body>
</html>