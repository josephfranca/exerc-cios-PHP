<?php
$idade = 21;
$autorizacao = True;

function verificarAcesso($idade,$autorizacao){
    $msg1 = "Acesso autorizado, idade e autorização Ok";
    $msg2 = "Acesso negado, idade mínima requerida: 18 anos";
    $msg3 = "Acesso negado, autorização necessária";
    
    if($idade >= 18 && $autorizacao == True){
         echo $msg1;
    }elseif($idade <= 18){
        echo $msg2;
    }else{
        if($autorizacao != TRUE){
            echo $msg3;
        }
    }
}

verificarAcesso($idade,$autorizacao);

//Instruções

// Escreva uma função chamada verificarAcesso que recebe dois parâmetros: um número inteiro representando a idade de uma pessoa e um booleano indicando se a pessoa possui autorização de acesso.

// A função deve retornar uma string indicando se a pessoa pode ou não ter acesso a um determinado local.

// Considere as seguintes condições:

//     Se a idade for maior ou igual a 18 anos e a autorização for verdadeira, retorne a string "Acesso autorizado".

//     Se a idade for menor que 18 anos, retorne a string "Acesso negado. Idade mínima requerida: 18 anos".

//     Se a idade for maior ou igual a 18 anos, mas a autorização for falsa, retorne a string "Acesso negado. Autorização necessária".