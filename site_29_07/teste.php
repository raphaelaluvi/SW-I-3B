<?php

    $nome = "RAPHA";
    $nome = strtolower($nome);

    if ($nome == "rapha"){
        echo "Bem Vinda!!";
    }
    else{
        echo "Usuário não encontrado!";
    }

    echo "<hr>";

    for ($n = 1; $n <= 10; $n++){
        echo $n;
        echo "<br>";
    }

    echo "<hr>";

    for ($n = 1; $n <= 10; $n++){
        if($n % 2 == 0){
            echo $n;
            echo "<br>";
        }
        else{
            echo "impar";
            echo "<br>";
        }
    }

    echo "<hr>";

    $a = 1;
    while ($a <=10){
        echo $a;
        $a = $a + 1;
        echo "<br>";
    }

?>