<?php
//Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes
//Faça um loop while para exibir apenas os dados que são strings

$arr = [1,3,"teste", 2.4, 2, "outra string", [], 2000, "string", 1, "Nome"];
$cont = 0;

while($cont < count($arr)){
    if(is_string($arr[$cont])){
        echo $arr[$cont];
        echo "<br>";
        $cont++;
    }else{
        $cont++;
    }
}
?>