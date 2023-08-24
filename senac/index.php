<?php
require 'inicio.php';
?>

<h1>Meu formulário</h1>

<form method="post" action="/estudos-php/senac/resultado.php">
	<label for="campo_de_nome">Digite sua busca</label>
	<input name="busca" id="campo_de_nome" type="text"/>
	<button type="submit">Enviar</button>
</form>

<?php
require 'fim.php';
?>