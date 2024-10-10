<?php
function parImpar($v1){
    $result = $v1 % 2 == 0;
    return $result;
    }
function multi($v1,$v2){
    return $v1 * $v2;
}
function divide($v1,$v2){
    return $v1 / $v2;
}
function raiz($v1){
    $result = pow($v1, 1/2);
    return $result;
}
function potencia($v1,$v2){
    $result = pow($v1,$v2);
    return $result;
}


?>