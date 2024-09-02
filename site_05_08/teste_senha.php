<?php
    $senha = 12345;

    //para dificultar caso precise
    // $data = date("Ymd";)

    // $total = $senha = $data;


    $senha_cripto = md5($senha);

    echo $senha_cripto;

    //minha senha criptografada
    //827ccb0eea8a706c4c34a16891f84e7b
?>