<?php

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == "rapha" && $senha == "12345"){
        echo "Bem Vinda!!";
    }
    else{
        echo "Usuário não encontrado!";
    }


?>