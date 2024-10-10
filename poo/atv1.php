<?php
class funcionario{
    public $nome = "Roberto";
    protected $salario = 1200;
    private $rg = "2022315930";
    function exibeSalario(){
        echo $this->salario;
    }
    public function alteraSalario($sal){
        if($sal >= 0){
            $this->salario = $sal;
        }
    }

}
$f = new funcionario();
$f->nome = "Roberto Graziadei";
$f->alteraSalario(4000);
$f->exibeSalario();
echo $f -> nome;


?>