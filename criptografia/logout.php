<?php
if(!isset($_SESSION['usuario'])){
    session_start();
}
session_destroy();
header('location: index.php');

?>