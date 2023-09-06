<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uma página php básica</title>
</head>
<body>
<?php 

    $fp = fopen(dirname(__FILE__) . "/teste.txt" , "w");

    $txt = "Kaka Kuku \n";
    fwrite($fp, $txt);

    $txt = "Katy Mary \n";
    fwrite($fp, $txt);

    $txt = "Laika \n";
    fwrite($fp, $txt);

    $txt = "Lucky Strike \n";
    fwrite($fp, $txt);

    fclose($fp);

    

?>

    
</body>
</html>