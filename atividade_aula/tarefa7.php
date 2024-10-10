<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 7</title>
</head>
<body>
    <h1>Informe 3 Valores</h1>
    <form action="tarefa7.php" method="post">
        <input type="number" name="v1"><br>
        <input type="number" name="v2"><br>
        <input type="number" name="v3"><br>
        <input type="submit">
    </form>
    <?php
    if($_POST){
    include("funcao7.php");
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $v3 = $_POST['v3'];
    $result = valor($v1,$v2,$v3);
    echo "$result";
}
    ?>
</body>
</html>