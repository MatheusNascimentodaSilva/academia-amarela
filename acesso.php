<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include_once("assets/componentes/cabecalho.html");
    ?>
    
    <form method= "POST">

    <label> E-mail:</label>
    <input type="email" name="email" id="">
    <label >Senha</label>
    <input type="password" name ="senha"> <br>
    <input type="submit" value="Entrar">
   

    <?php

    if ( isset($_REQUEST["email"]))
    
        include_once("assets/db/pessoa/login.php");

    ?>


</form>
    
</body>
</html>