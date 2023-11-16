
<?php

include_once("assets/db/conn.php");
//include_once("../conn.php");//

    $sql = "SELECT * FROM pessoa";
    
    $result = $conn->query($sql); 

    if ($result-> num_rows > 0) 
    {
        echo "<table>"; 
        echo "<tr> <th>ID</th>  <th>Nome</th> <th>sobrenome</th>  <th>E-mail</th>  <th>telefone</th> <th>endereco</th> <th>Detalhes</th> <th>Excluir</th> </tr>"; 
        
        while ($linha = $result->fetch_assoc()) 
        {

            
            echo "<tr>";

            
            echo "<td>" . $linha["idPessoa"] . "</td>";
            echo "<td>" . $linha["nome"] . "</td>";
            echo "<td>" . $linha["sobrenome"] . "</td>";
            echo "<td>" . $linha["email"] . "</td>";
            echo "<td>" . $linha["telefone"] . "</td>";
            echo "<td>" . $linha["endereco"] . "</td>";
            echo "<td> <a href='select.php?email=" . $linha["email"] . "'>Detalhes</a> </td>";
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