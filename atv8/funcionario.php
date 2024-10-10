<?php
include_once "pessoa.php";
class funcionario extends pessoa{
    private $matricula;
    private $salario;

    function setSalario($salar){
        $this->salario = $salar;
        if($salar <= 0){
            echo 'Nada';
            die;
        }
    }

    function getPrimeiraParcela(){
        $salario1 = $this->salario * 0.6;
        return $salario1;
    }
    function getSegundaParcela(){
        $salario2 = $this->salario * 0.4;
        return $salario2;
    }

}
?>