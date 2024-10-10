<?php
class pessoa {
    private $nome;
    private $sexo;
    private $idade;

function __construct($nome, $sexo, $idade){
    $this->nome = $nome;
    $this->sexo = $sexo;
    $this->idade = $idade;
}

    function setNome($nom){
        $this->nome = $nom;
    }
    function getNome() {
        return $this->nome;
    }

    //Sexo
    function setSexo($sex) {
        $this->sexo = $sex;
    }
    function getSexo(){
        return $this->sexo;
    }

    //Idade
    function setIdade($ida) {
        $this->idade = $ida;
    }
    function getIdade(){
        return $this->idade;
    }

}