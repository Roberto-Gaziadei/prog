<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
</head>
<body>
    <h1>Selecione a sua escolha de conversão</h1>
    <form action="tarefa8.php" method="post">
        Escolha uma temperatura para converter
        <input type="number" name="v1"><br><br>
        Fahrenheit para Celsius
    <input type="radio" name="converte" value="1"><br><br>
        Celsius para Fahrenheit 
    <input type="radio" name="converte" value="2"><br><br>
    <input type="submit">
    </form>
    <?php
    if($_POST){
        include("funcao8.php");
        $v1 = $_POST['v1'];
        $conversao = $_POST['converte'];

        $resultado = converte($v1,$conversao);
        echo "$resultado";

    }
    

    ?>
</body>
</html>