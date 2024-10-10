<?php
class caneta{
    public $modelo;
    public $cor;
    private $ponte;
    private $carga;
    protected $tampada;

    getModelo(){
        return $this->modelo;
    }

    function rabiscar(){
        if($this -> tampada == true){
            echo "<p>Erro! Não posso rabiscar!</p>";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }
    }

function tampar(){
    $this -> tampada = true;
}
function destampar(){
    $this -> tampada = false;
}
}
?>