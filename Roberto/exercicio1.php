<?php
$valor1 = $_POST['val1'];
$valor2 = $_POST['val2'];

function soma ($valor1,$valor2){
    return $valor1 + $valor2;
}
$resultado = soma($valor1,$valor2);
if($resultado > 0){
    echo "O resultado é ";
    echo soma ($valor1,$valor2);
}else{
    echo "O resultado é 0";
}


?>