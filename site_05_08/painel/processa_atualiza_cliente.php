<?php
    require('conecta.php');

    $id = $_GET['$id'];
    $nomenovo = $_POST['nomenovo'];
    $emailnovo = $_POST['emailnovo'];
    $telefonenovo = $_POST['telefonenovo'];

    //agr vamos criar a string de update e executar
    //dps direcionar para a index.php
    //header('Location: index.php');
?>