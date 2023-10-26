
    <?php

include_once("../conn.php");

$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$endereco = $_REQUEST['endereco'];


$sql = "INSERT INTO pessoa (nome, sobrenome, email, telefone, endereco) VALUES ('$nome','$sobrenome', '$email', '$telefone', '$endereco')";

if ($conn->query($sql) == TRUE)
{
    echo "<p>Cadastro realizado.</p>";
}
else
{
    echo "<p>Erro.</p>";
}

$conn->close();


?>

<a href="../../../index.html">Voltar ao início</a>
