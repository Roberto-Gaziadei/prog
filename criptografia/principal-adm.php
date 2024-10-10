<?php
session_start();

if(!isset($_SESSION['usuario'])){
    die("Você não tem acesso a essa página" . '<p><a href="index.php">Login</a></p>');
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>

<body>
    <h1>Olá, Adm <?php echo $_SESSION['usuario']; ?> </h1>
    <a href="form-cadastro-adm.php">Cadastrar usuário</a><br><br>
    <a href="logout.php">Logout</a>
</body>
</html>