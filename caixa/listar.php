<?php
//conectar ao banco de dados.
include("conecta.php");

// Seleciona todos os dados da tabela historia
$sql = "SELECT * FROM caixa";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);


//Lista os itens
echo '<table border=1>
<tr>
<th>Seu saldo</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
echo '<tr>';
echo '<td>'.$dados['consultar_saldo'] .'</td>';
echo '</tr>';
}

echo '</table>'."<br>";
echo '<button><a href="index.php">Voltar</a></button>';
?>