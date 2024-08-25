<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insere Clientes</title>
    <link href="css/estilo.css" rel="stylesheet" />
</head>
<body>
    
    <h3>Insira Clientes</h3>

    <div>
    <form action="/action_page.php">
        <label for="fname">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome...">

        <label for="lname">Email</label>
        <input type="text" id="email" name="email" placeholder="seuemail@email.com">

        <label for="lname">Telefone</label>
        <input type="text" id="telefone" name="telefone" placeholder="(11) 98765-4321">
    
        <input type="submit" value="Enviar">
    </form>
    </div>

</body>
</html>