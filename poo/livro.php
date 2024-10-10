<?php
class livro{
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;
public function __construct($t,$a,$ap) {
    $this->titulo = $t;
    $this->autor = $a;
    $this->anoPublicacao = $ap;
    $this->disponivel = true;
}
function emprestar(){
    if($this->disponivel == true){
        $this->disponivel = false;
    }
}
function devolver(){
    if($this->disponivel == false)
    $this->disponivel = true;
}
function exibirTitulo(){
    $detalhes = "Titulo: $this->titulo", "Autor: $this->autor", "Ano de publicação: $this->anoPublicacao", "Status: $this->disponivel";
return $detalhes;

}
function exibeTitulo(){
    $titulo = "Titulo: $this->titulo";
    echo "o titulo é titulo";
}







}
?>