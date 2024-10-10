<?php
include_once "amigo.php";

$s2 = new amigo('Jeveron', 'Feminino', '12', '12/08/2012');
echo $s2->getNome() . "<br>";
echo $s2->getSexo() . "<br>";
echo $s2->getAniversario();
