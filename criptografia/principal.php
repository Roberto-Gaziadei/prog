<?php
session_start();

if(!isset($_SESSION['usuario'])){
    die("Você precisa estar logado para acessar esta página" . '<p><a href="index.php">Login</a></p>');
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
<h1>Olá, <?php echo $_SESSION['usuario']; ?> </h1>
    <a href="logout.php">Logout</a>
</body>

</html>