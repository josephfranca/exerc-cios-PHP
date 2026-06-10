<?php
    //Crie um loop que vai até o número 30
    //O contador deve iniciar 4 
    //Faça incrementos de 2 em 2 no contador
    //Utilize o break para parar o loop quando chegar no número 24

    $cont = 4;
    while($cont <= 30){
        $cont = $cont + 2;
        echo $cont;
        echo "<br>";

        if($cont === 24){
            echo "Saindo do loop <br>";
            echo $cont;
            break;
        }
    }
?>