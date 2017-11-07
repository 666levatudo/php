<?php

$nome = $_POST[ 'nome'];
$telefone = $_POST[ 'telefone'];
$email = $_POST['email'];

echo  "<strong>Olá Sr(a), seu cadastro inicial é:</strong> <br/><br/>" . "<b>NOME:</b> " . $nome . "<br>" . "<b>TELEFONE:</b> " . $telefone . "<br>" . "<b>EMAIL:</b> " . "<i>" .$email . "</i>";

?>