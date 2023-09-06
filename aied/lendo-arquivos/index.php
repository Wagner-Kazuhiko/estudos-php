<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uma página php básica</title>
</head>
<body>
<?php 

    $fp = fopen(dirname(__FILE__) . "/exemplo.json" , "r");

    while( !feof($fp)){
        $linha = fgets($fp);
        echo $linha . "<br/>";
    }

    fclose($fp);

    

?>

    
</body>
</html>