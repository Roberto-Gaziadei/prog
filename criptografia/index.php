<?php
if($_POST){


if(!isset($_SESSION['usuario'])){
    session_start();
}die();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post">
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Senha: <input type="password" name="senha" required></label><br>
        <input type="submit" value="Login">
    </form><br><br>
    <a href="form-cadastro.php">Cadastrar-se</a><br><br>
</body>
</html>
<?php
?>