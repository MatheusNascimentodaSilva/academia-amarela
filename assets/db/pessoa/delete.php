
<?php

include_once("../conn.php");

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

<a class="btn" href="../../../index.php">Voltar ao início</a>
