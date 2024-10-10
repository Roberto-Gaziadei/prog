<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa</title>
</head>
<body>
    <h1>Informe dois valores</h1>
    <form action="tarefa5.php" method="post">
        <input type="number" name="v1"><br>
        <input type="number" name="v2"><br>
        <input type="submit">
    </form>
    <?php
    include("funcao5.php");
    if($_POST){
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $result = soma($v1,$v2);
    if($result > 0){
    echo "O resultado dessa soma é $result";
    }else{
        echo "0";
    }
    }
?>
</body>
</html>


