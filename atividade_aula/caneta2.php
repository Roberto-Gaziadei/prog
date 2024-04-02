<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula POO</title>
</head>
<body>
    
<?php

require_once 'caneta.php';

$c1 = new caneta;
$c1 -> modelo = "Bic Cristal";
$c1 -> cor = "Azul";
//$c1 -> ponta = 0.5;
//$c1 -> tampada = false;
$c1 -> rabiscar();
$c1 -> tampar();
$c1 -> rabiscar();


print_r($c1);

?>

</body>
</html>