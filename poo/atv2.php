<?php
include("produto.php");
$p1 = new Produto;
$p1->descricao('Chocolate');
$p1->estoque (7);
$p1->preco (6);


$p2 = new Produto;
$p2->descricao  ('Pão de queijo');
$p2->estoque (21);
$p2->preco (4.00);

// Exibição do objeto
echo "<pre>";
print_r($p1);
echo "</pre>";
echo "<pre>";
echo "<br>";
print_r($p2);
echo "</pre>";
?>