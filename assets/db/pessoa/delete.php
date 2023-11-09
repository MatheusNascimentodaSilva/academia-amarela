
<?php

include_once("assets/db/pessoa/conn.php");

$id  = $_GET["id"] ;

$sql = "DELETE FROM pessoa WHERE idPessoa = $id";

if ($conn->query($sql) == TRUE)
{
    echo "<p>Cadastro excluido com sucesso.</p>";
}
else
{
    echo "<p>Erro.</p>";
}

$conn->close();


?>

<a href="../../../index.html">Voltar ao início</a>
