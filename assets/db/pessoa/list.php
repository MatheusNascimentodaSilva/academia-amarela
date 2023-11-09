

<?php

    include_once("assets/db/conn.php");

    $sql = "SELECT * FROM pessoa";
    
    $result = $conn->query($sql); 

    if ($result-> num_rows > 0) 
    {
        echo "<table>"; 
        echo "<tr> <th>ID</th> <th>Nome</th> <th>E-mail</th> <th>Detalhes</th> </tr>"; 
        
        while ($linha = $result->fetch_assoc()) 
        {

           
            echo "<tr>";
            echo "<td>" . $linha["idPessoa"] . "</td>";
            echo "<td>" . $linha["nome"] . "</td>";
            echo "<td>" . $linha["sobrenome"] . "</td>";
            echo "<td>" . $linha["email"] . "</td>";
            echo "<td>" . $linha["telefone"] . "</td>";
            echo "<td>" . $linha["endereco"] . "</td>";
            echo "<td> <a href='select.php?telefone=" . $linha["telefone"] . "'>Detalhes</a> </td>";
            echo "<td> <a href='delete.php?id=" . $linha["idPessoa"] . "' onClick='return confimar()' >Excluir</a> </td>";
            echo "</tr>";
        }    

        echo "</table>"; 

    }
    else
    {
        echo "<p>Nenhum registro foi encontrado.</p>";
    }

    $conn->close();

?>