<?php

    include_once("../conn.php");

    $telefone = $_GET["telefone"];

    $sql = "SELECT * FROM pessoa WHERE telefone = '$telefone'";
    
    $result = $conn->query($sql); 

    if ($result-> num_rows > 0) 
    {
        
        
        $linha = $result->fetch_assoc(); 

        echo "<p>Nome: " . $linha['nome'] . "</p> <p>E-mail: " . $linha['email'] . "</p>";

    }
    else
    {
        echo "<p>Nenhum registro foi encontrado.</p>";

        
    }

    $conn->close();

?>