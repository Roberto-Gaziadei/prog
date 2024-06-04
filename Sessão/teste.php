<?php
// Teste a sessao
session_start();

if(isset($_SESSION['usuario'])){
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
}else{
    echo "Sessão inexistente";
}
?>