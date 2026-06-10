<?php
    //Crie um array com valores de 10 a 100, com incremento de 10
    //aplique um loop neste array
    //quando entrar os valores 30 ou 40, pule para a proxima execução


$arr = [];
$cont = 10;

while ($cont <= 100) {
    $arr[] = $cont;
    $cont += 10;
}

$indice = 0;

while ($indice < count($arr)) {

    if ($arr[$indice] == 30 || $arr[$indice] == 40) {
        $indice++;
        continue;
    }

    echo $arr[$indice] . "<br>";
    $indice++;
}


    
?>