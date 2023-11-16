<?php

    if ( isset($_REQUEST["email"]) && isset($_REQUEST["senha"]))
    {
        include_once("assets/db/conn.php");
        
        $email = $_REQUEST["email"];
        $senha = md5($_REQUEST["senha"]);
    
        $sql = "SELECT * FROM pessoa WHERE email = '$email' AND senha = '$senha' ";
        
        $result = $conn->query($sql); 
    
        if ($result-> num_rows > 0) 
        {
          
            $linha = $result->fetch_assoc(); 

           
            session_start();
            $_SESSION["nome"] = $linha["nome"];
            header('Location: areaRestrita.php');
    
        }
        else
        {
            echo "<p>Usuário ou senha inválido.</p>";
        }
    
        $conn->close();
    }

   

?>