<?php

//conectar ao banco de dados.
include("conecta.php");

//receber os dados do formulário.
$consultar_saldo = $_GET['consultar_saldo'];
$saldo = "SELECT * FROM caixa";

$resultado = mysqli_query($conexao,$saldo);
$dados = mysqli_fetch_assoc($resultado);
echo $dados['consultar_saldo'];

$result = $dados['consultar_saldo'] + $consultar_saldo;
$sql = "UPDATE caixa SET consultar_saldo = $result";

header("location: listar.php");

//executar o comando sql.
mysqli_query($conexao, $sql);

?>