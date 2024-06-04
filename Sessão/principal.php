<?php

session_start();
if(!isset($_SESSION['usuario'])){
    header('location:sessao.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bem vindo, <?php echo $_SESSION['usuario'];?></h1>

    <h3> <a href="sair.php">Sair</a></h3>
</body>
</html>