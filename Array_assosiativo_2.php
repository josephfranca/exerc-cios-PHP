<?php
    //Crie um arquivo php
    //Crie um array associativo com características de uma pessoa
    //Desafio: cheque se a pessoa é maior de idade e imprima uma mensagem, caso seja

    //Criando o array dessa forma para uma melhor visualização do que cada chave (indice) significa
    $pessoa = ['Nome' => 'José',
    'Idade' => 21, 
    'Profissao' => 'Suporte de TI'
    
    ];

    //exibindo toda a array
    print_r($pessoa);
    echo "<br>";

    //Essa foi a forma que eu encontrei para separar o valor da chave idade

    $idade = $pessoa['Idade'];

    //Checando se a pessoa é maior de idade.
    if($idade >= 18){
        echo "Essa pessoa é maior de idade";
    }

?>