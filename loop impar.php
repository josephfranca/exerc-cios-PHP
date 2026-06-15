<?php
    //Crie um array de 10 a 20 com for
    //faça um loop em cima do array criado dinamicamente
    //Imprima os números impares

    $arr = [];
    for($i = 10; $i <= 20; $i++){
        array_push($arr, $i);        
        }
        print_r($arr);

        for($i= 0; $i <= 20; $i++){
            if($i % 2 == 1){
                echo "O número $i é impar <br>";
            }
        }

?>