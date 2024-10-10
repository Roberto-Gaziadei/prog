<?php
include("produto_atv3.php");

$p1 = new Produto;
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 8;
$p1->codigo = '2342';
$p1->marca = 'Neugebauer';
$p1->cor_embalagem = 'preto';
$p1->data_fabricacao = '12/07/2024';
$p1->prazo_validade = '12/08/2024';
$p1->peso_embalagem = '5g';
$p1->peso_produto = '100g';

echo "<h1>{$p1->descricao}</h1>";
echo "O estoque de {$p1->descricao} é {$p1->estoque}. <br>";
echo "O preco de {$p1->descricao} é R$ {$p1->preco}. <br>";
echo "O código do {$p1->descricao} é {$p1->codigo}. <br>";
echo "A marca do {$p1->descricao} é {$p1->marca}. <br>";
echo "A cor da embalagem do(a) {$p1->descricao} é {$p1->cor_embalagem}. <br>";
echo "A data de fabricação do(a) {$p1->descricao} é {$p1->data_fabricacao}. <br>";
echo "O prazo de validade do(a) {$p1->descricao} é {$p1->prazo_validade}. <br>";
echo "O peso do(a) {$p1->descricao} é {$p1->peso_embalagem}. <br>";
echo "O peso do {$p1->descricao} é {$p1->peso_produto}. <br> <hr>";

$p1->aumentarEstoque(10);
$p1->diminuirEstoque(5);
$p1->reajustarPreco(50);

$p1 = new Produto;
$p1->descricao = 'Café';
$p1->estoque = 2;
$p1->preco = 5;
$p1->codigo = '234242';
$p1->marca = 'Nestle';
$p1->cor_embalagem = 'Branco';
$p1->data_fabricacao = '12/07/2024';
$p1->prazo_validade = '12/08/2024';
$p1->peso_embalagem = '5g';
$p1->peso_produto = '500g';

echo "<h1>{$p1->descricao}</h1>";
echo "O estoque de {$p1->descricao} é {$p1->estoque}. <br>";
echo "O preco de {$p1->descricao} é R$ {$p1->preco}. <br>";
echo "O código do {$p1->descricao} é {$p1->codigo}. <br>";
echo "A marca do {$p1->descricao} é {$p1->marca}. <br>";
echo "A cor da embalagem do(a) {$p1->descricao} é {$p1->cor_embalagem}. <br>";
echo "A data de fabricação do(a) {$p1->descricao} é {$p1->data_fabricacao}. <br>";
echo "O prazo de validade do(a) {$p1->descricao} é {$p1->prazo_validade}. <br>";
echo "O peso do(a) {$p1->descricao} é {$p1->peso_embalagem}. <br>";
echo "O peso do {$p1->descricao} é {$p1->peso_produto}. <br> <hr>";
?>