<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>
<body>
    <h2> Informe três valores </h2>
        <form action="exercicio2.php" method="post">
          Valor 1: <input type="number" name="v1"><br>
          Valor 2: <input type="number" name="v2"><br>
          Valor 3: <input type="number" name="v3"><br><br>
        <input type="submit" value="Enviar"></input>
        </form>
        <?php
        include "exe2.php";
        if($_POST){
          $n1 = $_POST['v1'];
          $n2 = $_POST['v2'];
          $n3 = $_POST['v3']; 
          $result = maiorValor($n1,$n2,$n3);
          echo "$result";
        }
        ?>

</body>
</html>