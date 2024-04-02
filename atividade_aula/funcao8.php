<?php

function converte($v1,$conversao){
    if($conversao == 1){
        $result = ($v1 - 32) * 5/9;
        return $result;
}else{
    $result = ($v1 * 9/5) + 32;
    return $result;
}
}
?>