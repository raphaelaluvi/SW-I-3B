<?php
    require 'conecta.php';

    $id = $_GET['id'];
    $nomenovo = $_POST['nomenovo'];
    $emailnovo = $_POST['emailnovo'];
    $telefonenovo = $_POST['telefonenovo'];

    //agr vamos criar a string de update e executar
    $consulta = "UPDATE clientes SET nome_cliente = '$nomenovo', email_cliente = '$emailnovo', telefone = '$telefonenovo' WHERE id_cliente = $id";
    $conexao->query($consulta);

    //dps direcionar para a index.php
    header('Location: index.php');
?>

