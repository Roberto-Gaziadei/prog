<?php
class produto{
    private $descricao;
    private $estoque;
    private $preco;

    function descricao($p){
        $this->descricao = $p;
    }
    function estoque($p){
        $this->estoque = $p;
    }
    function preco($p){
        $this->preco = $p;
    }
}
?>