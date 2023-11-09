
    <?php

include_once("../conn.php");

$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$endereco = $_REQUEST['endereco'];
$senha = md5 ($_REQUEST['senha']);


$sql = "INSERT INTO pessoa (nome, sobrenome, email, telefone, endereco, senha) VALUES ('$nome','$sobrenome', '$email', '$telefone', '$endereco', '$senha')";

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
