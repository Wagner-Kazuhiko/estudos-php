<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section id="esquerda">
    <form action="">
        <h2>CADASTRAR PESSOA</h2>
        <label for="nome">NOME</label>
        <input type="text" name="nome" id="nome">
        <label for="telefone">TELEFONE</label>
        <input type="text" name="telefone" id="telefone">
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="Cadastrar">
    </form>
</section>

<section id="direita">
    <table>
        <tr id="titulo">
            <td>NOME</td>
            <td>TELEFONE</td>
            <td colspan="2">EMAIL</td>
        </tr>
        <tr>
            <td>Maria</td>
            <td>00000000</td>
            <td>maria@email.com</td>
            <td><a href="">Editar</a><a href="">Excluir</a></td>
        </tr>
    </table>

</section>
    
</body>
</html>