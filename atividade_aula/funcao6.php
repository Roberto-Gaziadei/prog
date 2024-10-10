<?php
function maiorValor($v1,$v2,$v3){
    if($v1>$v2 and $v1>$v3){
        return $v1;
    }if($v2>$v1 and $v2>$v3){
        return $v2;
    }if($v3>$v1 and $v3>$v2){
        return $v3;
    }
}
?>