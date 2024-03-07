<?php

$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];

function tf($v1,$v2,$v3){
    if($v1 > $v2 and $v2 > $v3){
        echo "True";
        return;
    }else{
        echo "False";
        return;
    }
}

echo "$v1 , $v2 , $v3<br>";
$teste = tf($v1,$v2,$v3);
echo "$teste";

?>  