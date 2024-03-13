<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de temperaturas</title>
</head>
<body>

    <form action="tarefa8.php" method="post">
        Informe uma temperatura<br>
        <input type="number" name="graus"><br>
        <input type="submit">
    </form>
    <?php
    if($_POST){
        include("funcao8.php");
        $graus = $_POST['graus'];
        $cel_fah = $_POST['cel_fah'];
        $result = graus($graus,$cel_fah,$fah_cel);
        echo "$result";
    }
    ?>
</body>
</html>