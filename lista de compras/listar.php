<?php
//conectar ao banco de dados.
include("conecta.php");

// Seleciona todos os dados da tabela historia
$sql = "SELECT * FROM compra";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);


//Lista os itens
echo '<table border=1>
<tr>
<th>Descrição do produto</th>
<th>Quantidade</th>
<th>Categoria do produto</th>
<th>Mês</th>
<th>Ano</th>
<th colspan=3>Opções</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
echo '<tr>';
echo '<td>'.$dados['descricao_produto'] .'</td>';
echo '<td>'.$dados['quantidade'] .'</td>';
echo '<td>'.$dados['categoria_produto'] .'</td>';
echo '<td>'.$dados['mes'] .'</td>';
echo '<td>'.$dados['ano'] .'</td>';
echo '<td> <a href="formedit.php?id_item='.$dados['id_item'].'"> <img src="imagens/editar.png" width="20" height="20"> </a> </td>';
echo '<td> <a href="excluir?id_item='.$dados['id_item'].'"> <img src="imagens/excluir.png" width="20" height="20"> </a> </td>';
echo '</tr>';
}

echo '</table>'."<br>";
echo '<button><a href="index.php">Voltar</a></button><br><br>';
echo '<button><a href="select.php">Selecionar um ano específico</a></button>';
?>