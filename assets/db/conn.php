<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pessoa";

  
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error)
    {
        die("Falha de conexão: " . $conn->connect_error);
    }

?>