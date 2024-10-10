<?php
include('livro.php');
include('biblioteca.php');

// Teste das classes
$biblioteca = new biblioteca("Biblioteca IFFar");
$livro1 = new Livro("PHP Programando com Orientação a Objetos", "Pablo Dall'Oglio", 2018);
$livro2 = new Livro("Algoritmos - Teoria e Prática", "Thomas H. Cormen", 2012);
$livro3 = new Livro("Entendendo Algoritmos", "Aditya Y. Bhargava", 2017);

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

echo "<br>Lista de Livros na biblioteca:<br>";
$biblioteca->listarLivros();

echo "<br>Empréstimo de Livro:<br>";
$biblioteca->emprestarLivro("Algoritmos - Teoria e Prática");
$biblioteca->emprestarLivro("Entendendo Algoritmos");

echo "<br>Lista de livros após empréstimos:<br>";
$biblioteca->listarLivros();

echo "<br>Devolução de Livro:<br>";
$biblioteca->devolverLivro("Entendendo Algoritmos");

echo "<br>Lista de livros após devolução:<br>";
$biblioteca->listarLivros();
?>