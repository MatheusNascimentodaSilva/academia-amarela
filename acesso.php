<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/acesso.css">
</head>
<body>





<?php
        include_once("assets/componentes/cabecalho.html");
    ?>

    
    <section class="todo">

        <div class="area">

           
        <h3>login</h3>
            <form method= "POST">
                

                <label>E-mail:</label><br>
                <input class="input" type="email" name="email" id="inpu" placeholder="Informe seu email de cadastro"><br>

                <label> Senha</label> <br>
               <input class="input" type="password"  name="senha"  id="inpu" placeholder="Digite sua senha">

                <input class="entrar" type="submit" value="Buscar"><br>

                <a href="cadastro.php" class="registro">Registre-se aqui</a>
  
    
            </form>




        </div>

    </section>
    
        <?php

if ( isset($_REQUEST["email"]))

    include_once("assets/db/pessoa/login.php");

?>




<?php
        include_once("assets/componentes/rodape.html");
    ?>
 
</html>

</body>