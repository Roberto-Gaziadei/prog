<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <form action="cadastrar.php" method="post">
        <input type="hidden" nome="nivel" value="2" required>
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Senha: <input type="password" name="senha" required></label><br>
        <input type="submit" value="Cadastrar-se">
    </form>
</body>

</html>