<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de utilidades</title>
</head>
<body>
    <h1>Informe um numero</h1>
        <form action="tarefa10.php" method="post">
            Valor 1
            <input type="number" name="v1"><br><br>
            Valor 2 
            <input type="number" name="v2"><br><br><br>

            Verifique se um número é par ou ímpar
            <input type="radio" name="a" value="1"><br><br>
            Multiplicar dois números
            <input type="radio" name="a" value="2"><br><br>
            Dividir dois números
            <input type="radio" name="a" value="3"><br><br>
            Raiz quadrada de um número
            <input type="radio" name="a" value="4"><br><br>
            Elevar um número a uma potência
            <input type="radio" name="a" value="5"><br><br>
            <input type="submit">
            <button><a href="tarefa10.php">Reiniciar</a></button>
            

        </form>
        <?php
        if($_POST){
            include("funcao10.php");
            $v1 = $_POST['v1'];
            $v2 = $_POST['v2'];
            $a = $_POST['a'];

            if($a == 1){
            $resultado = parImpar($v1);
            if($resultado == 'Par' ){
                echo "Par";
            }else{
                echo 'Impar';
            }
            }
            if($a == 2){
                $resultado = multi($v1,$v2);
                echo "$resultado";

            }if($a == 3){
            $resultado = divide($v1,$v2);
            echo "$resultado";
            }

            


        }
        ?>
</body>
</html>