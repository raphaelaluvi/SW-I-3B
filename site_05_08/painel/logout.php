<?php
    session_start();

    //tem dois jeitos para limpar
    // unset($_SESSION['id']);
    // unset($_SESSION['nome']);
    // unset($_SESSION['email']);

    unset(
        $_SESSION['id'],
        $_SESSION['nome'],
        $_SESSION['email']
    );
    header('Location: ../index.html');
?>