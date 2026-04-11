<?php 
//Crie algumas variáveis com tipos de dados diferentes: string, int e boolean, por exemplo
//Cheque se a variável é int
//Caso sim, apresente uma mensagem confirmando o tipo de dado
//Caso não, apresente outra mensagem;

$a = 21; //Int
$b = 21.3; //Float
$c = "String"; //String

if(is_int($a)){
    echo "A variável a é do tipo inteiro e seu valor é " . $a . "<br>";
}else{
    echo "A variável a  não é do tipo inteiro e seu valor é " . $a . "<br>";
}

if(is_int($b)){
    echo "A variável b é do tipo inteiro e seu valor é " . $b . "<br>";
}else{
    echo "A variável b não é do tipo inteiro e seu valor é " . $b . "<br>";
}

if(is_int($c)){
    echo "A variável c é do tipo inteiro e seu valor é " . $c . "<br>";
}else{
    echo "A variável c não é do tipo inteiro e seu valor é " . $c . "<br>";
}
?>