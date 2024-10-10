<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 6</title>
</head>
<body>
    <h1>Informe 3 valores</h1>
    <form action="tarefa6.php" method="post">
        <input type="number" name="v1"><br>
        <input type="number" name="v2"><br>
        <input type="number" name="v3"><br>
        <input type="submit">
    </form>
    <?php
    if($_POST){
    include("funcao6.php");
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $v3 = $_POST['v3'];
    $result = maiorValor($v1,$v2,$v3);
    echo "O resultado é $result";
    }
    ?>

</body>
</html>