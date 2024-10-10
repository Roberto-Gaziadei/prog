<?php

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

function data($dia,$mes,$ano){
    if($ano> 1900 and $ano <= 2024){
        if($mes !=2 and $dia >=1 and $dia <=31){
            echo "True";
            return;
        }if($dia >=1 and $dia <=29){
            echo "True";
            return;
        }else{
            echo "Esse dia não existe";
        }
        }else{
            echo "False";
            return;
        }
    }

echo "$dia/ $mes/ $ano<br>";
$teste = data($dia,$mes,$ano);
echo "$teste";

?>