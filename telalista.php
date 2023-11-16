<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/list.css">
</head>
<body>


<?php
        include_once("assets/componentes/cabecalholist.html");
    ?>

    <h2>tabela dos usuarios</h2>

<?php
        include_once("assets/db/pessoa/list.php");
    ?>

    
<?php
        include_once("assets/componentes/rodape.html");
    ?>  
    
</body>
</html>