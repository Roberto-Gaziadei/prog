<?php
class Biblioteca {
    private $nome;
    private $livros;
 
    public function __construct($nome) {
        $this->nome = $nome;
        $this->livros = [];
    }
 
    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
        echo "Livro '{$livro->exibirTitulo()}' adicionado à biblioteca.<br>";
    }
 
    public function listarLivros() {
         // CODIFICAR
    }
 
    public function emprestarLivro($titulo) {
        foreach ($this->livros as $livro) {
            if ($livro->exibirTitulo() == $titulo) {
                $livro->emprestar();
                return;
            }
        }
        echo "Livro '$titulo' não encontrado na biblioteca.<br>";
    }
 
    public function devolverLivro($titulo) {
        foreach ($this->livros as $livro) {
            if ($livro->exibirTitulo() == $titulo) {
                $livro->devolver();
                return;
            }
        }
        echo "Livro '$titulo' não encontrado na biblioteca.<br>";
    }
 }
?>
