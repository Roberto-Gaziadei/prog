<?php

// Recebe o id do usuário
$id = $_GET['id_item'];

// Conectar ao BD
include("conecta.php");


// Seleciona os dados do usuário da tabela
$sql = "SELECT * FROM compra WHERE id_item = $id";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);

// Gera o vetor com os dados buscados
$dados = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar item</title>
    
</head>
<body>

<form action="alterar.php" method="get">

    <h2>Editar item</h2>
    <input type="hidden" name="id_item" value="<?php echo $dados['id_item'];?>">
    Edite o item
    <input  type="text" value="<?php echo $dados['descricao_produto'];?>" name="descricao_produto"/><br><br>
    Edite a quantidade
    <input type="number" value="<?php echo $dados['quantidade'];?>" name="quantidade" /><br><br>
    Edite a categoria
    <input type="text" value="<?php echo $dados['categoria_produto'];?>" name="categoria_produto" /><br><br>
    Edite o mês
    <input type="text" value="<?php echo $dados['mes'];?>" name="mes" /><br><br>
    Edite o ano
    <input type="number" value="<?php echo $dados['ano'];?>" name="ano" /><br><br>
       

    <input type="submit" value="Editar"/>

    <p>Deseja <a href="index.php">Voltar?</a></p>

</form>
    
</body>
</html>