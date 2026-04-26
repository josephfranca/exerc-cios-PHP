<?php
    function compararNumeros ($x, $y){
        if($x > $y){
            echo "O primeiro valor é maior que o segundo, o valor maior é de $x <br>";
        }elseif ($y > $x) {
            echo "O segundo valor é maior que o primeiro, o valor maior é de $y <br>";
        }else{
         echo "Os números são iguais, $x e , $y <br>";
        }
    }
    
    compararNumeros(1,2);
    compararNumeros(50,200);
    compararNumeros(100,100);

    //Instruções do desafio
// Comparação de Números

//     Escreva uma função chamada compararNumeros que recebe dois números inteiros como parâmetros.

//     A função deve comparar os dois números e retornar uma string indicando qual número é maior ou se são iguais.

//     Considere as seguintes condições:

//         Se o primeiro número for maior que o segundo número, retorne a string "O primeiro número é maior."

//         Se o segundo número for maior que o primeiro número, retorne a string "O segundo número é maior."

//         Se os números forem iguais, retorne a string "Os números são iguais."