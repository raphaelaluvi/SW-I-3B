<?php
    require 'conecta.php';

    $id = $_GET['id'];

    //agr vamos criar a string de update e executar
    $consulta = "DELETE FROM clientes WHERE id_cliente = $id";
    $conexao->query($consulta);

    header('Location: index.php');
?>