<?php

    session_start();

    if(isset($_SESSION["nome"]))
    {
        echo "<p> Bem vindo" . $_SESSION["nome"];
    }

    else
    {
        header
    }



?>