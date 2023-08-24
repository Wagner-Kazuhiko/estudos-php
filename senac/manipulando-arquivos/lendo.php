<?php
$fh = fopen('nome.txt', 'r');
$nome = fread($fh, filesize('nome.txt'));
echo $nome;
fclose($fh);




?>