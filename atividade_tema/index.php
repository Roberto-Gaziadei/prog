<?php
if($_POST){
    $tema = $_POST['t'];
    if(isset($_COOKIE['tema'])){

    }
}else{
    seatcookie('tema', '$tema', +60*60*24*7);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha seu tema</title>
</head>
<h1>Escolha seu tema</h1>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="t" value="1" >Claro<br>
        <input type="radio" name="t" value="2" >Escuro<br>
        <input type="submit" Salvar>
    </form>
</body>
</html>
<?php
if($tema == 1){
    echo "<style>bory{backgroud: white; color: black;} </style>";
}else{
    echo "<style>bory{backgroud: black; color: white;} </style>";
}
?>