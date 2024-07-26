<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    <h1>Exemplo 2 - Teste de PHP</h1>

    <?php
        echo "Hello World!!";
        echo "<br>";
        //variaveis
        $nome = "Rapha";
        echo $nome;
        echo "<br>";
        echo '$nome';

        //concatenar
        echo "<br>";
        echo "Seu nome é: $nome";
        echo "<br>";
        echo "Seu nome é: " . $nome;
        echo "<br>";
        echo 'Seu nome é: ' . $nome;
    ?>
    
</body>
</html>