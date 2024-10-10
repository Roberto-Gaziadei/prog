<?php
include_once "pessoa.php";
class amigo extends pessoa {
    private $aniversario;

    function __construct($nome, $sexo, $idade, $aniversario){
        $this->aniversario = $aniversario;
        parent:: __construct($nome, $sexo, $idade);
        }
        function getAniversario(){
            return $this->aniversario;
        }
}
