<h1>Qual é o seu nome</h1>
<form method="post">
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>

<?php
if(array_key_exists('nome', $_POST)){
    $fh = fopen('nome.txt', 'w');
    fwrite($fh, $_POST['nome']);
    fclose($fh);
}

?>