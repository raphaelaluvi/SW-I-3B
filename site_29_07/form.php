<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário PHP</h1>

    <!-- action -> pagina q vai abrir metodos -> get e post-->
    <form action="processa.php" method="POST">

        <label for="nome">Nome:</label><br>
        <input type="text" name="nome"><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email"><br>

        <label for="idade">Idade:</label><br>
        <input type="text" name="idade"><br><br>

        <input type="submit" value="ENVIAR">

    </form>
</body>
</html>