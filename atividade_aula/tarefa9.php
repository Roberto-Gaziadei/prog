<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Até seu numero</title>
</head>
<body>
    <h1>Escolha um numero</h1>
    <form action="tarefa9.php" method="post">
        <input type="number" name="v1">
        <input type="submit">
    </form>

    <?php
    if($_POST){
        include("funcao9.php");
        $v1 = $_POST['v1'];

        $result = number($v1);
        echo "$result";

    }
    
    ?>

</body>
</html>