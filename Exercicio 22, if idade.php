<?php 
// Crie variáveis que recebem idades
//Cheque se as idades são maiores ou iguais a 18
//Se sim, imprima uma mensagem que a pessoa é maior de idade

$idadeMariana = 18;
$idadeCarlos = 12;
$idadeJose = 22;

if($idadeMariana >= 18){
    echo "A Mariana é maior de idade e tem: ". $idadeMariana . " anos" . "<br>";
}else{
    echo "A Mariana é menor de idade e tem: " . $idadeMariana . " anos" . "<br>";
}

if($idadeCarlos >= 18){
    echo "O Carlos é maior de idade e tem: ". $idadeCarlos . " anos" . "<br>";
}else{
    echo "O Carlos é menor de idade e tem: " . $idadeCarlos . " anos" . "<br>";
}

if($idadeJose >= 18){
    echo "O José é maior de idade e tem: " . $idadeJose . " anos" . "<br>";
}
?>