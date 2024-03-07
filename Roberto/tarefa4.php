<?php

$ano = $_POST['ano'];
$mes = $_POST['mes'];
$dia = $_POST['dia'];

function data($ano,$mes,$dia){
    if($ano > 1900 and $ano <= 2024 ){
        echo "True";
        return;
    }else{
        echo "False";
        return;
    }
}

echo "$ano , $mes , $dia<br>";
$teste = data($ano,$mes,$dia);
echo "$teste";

?>  