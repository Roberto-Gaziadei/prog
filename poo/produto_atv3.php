<?php
class Produto{
    public $descricao;
    public $estoque;
    public $preco;
    public $codigo;
    public $marca;
    public $cor_embalagem;
    public $data_fabricacao;
    public $prazo_validade;
    public $peso_embalagem;
    public $peso_produto;

    function aumentarEstoque($unidades){
        if($unidades >= 0)
        $this->estoque = $this->estoque + $unidades;
    }
    function diminuirEstoque($unidades){
        if($unidades >= 0)
        $this -> estoque = $this -> estoque - $unidades;
    }
    function reajustarPreco($percentual){
        if($percentual >= 0)
        $this -> preco = $this -> preco + ($this -> preco * $percentual/100);
    }

}


?>