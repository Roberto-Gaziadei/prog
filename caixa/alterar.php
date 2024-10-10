<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$saque = $_GET['saque'];
$saldo = "SELECT * FROM caixa";
$resultado = mysqli_query($conexao,$saldo);
$dados = mysqli_fetch_assoc($resultado);
//echo $dados['consultar_saldo'];

if($dados['consultar_saldo'] > $saque){
$result = $dados['consultar_saldo'] - $saque;

$sql = "UPDATE caixa SET consultar_saldo = $result";
mysqli_query($conexao,$sql);
}else{
    echo"Saldo Insuficiente";
}
if ($conexao->error) {

    die("Falha ao editar usuário no sistema:". $conexao->error);

}else {
    //header("location: listar.php");
}

?>