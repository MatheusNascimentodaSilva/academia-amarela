
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>
    <link  rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php
        include_once("assets/componentes/cabecalho.html");
    ?>
     <form action="assets/db/pessoa/select.php">
        <h2>Buscar usuário</h2>
        <label>Telefone</label>
        <input type="telefone" name="telefone">
        <input type="submit" value="Buscar">
    </form>
    <?php
        include_once("assets/componentes/rodape.html");
    ?>
</body>
</html>