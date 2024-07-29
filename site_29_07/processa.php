<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    echo "Bom dia <span style='color:red;'>" . $nome . "</span>" . "!!";
    echo "<br>";
    echo "Seu email é " . $email;
    echo "<br>";
    echo "Você tem " . $idade . " anos de idade";

?>