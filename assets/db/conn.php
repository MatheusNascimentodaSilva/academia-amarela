<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "academia-amarela";

    //criando o caminho de conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error)
    {
        die("Falha de conexão: " . $conn->connect_error);
    }

?>