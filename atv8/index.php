<?php
include_once "funcionario.php";

$a = new funcionario('Roberto', 'Masculino', '18');
$a->setSalario('20000');
echo "Nome: " . $a->getNome() . "<br>";
echo "Sexo: " . $a->getSexo() . "<br>";
echo "Primeira parcela: " . $a->getPrimeiraParcela() . "<br>";
echo "Segunda parcela: " . $a->getSegundaParcela() . "<br>";
echo "<br>";