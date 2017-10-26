<?php
//conecta
$conexao = mysqli_connect("localhost", "root", "");


//conecta com o db
$db = mysqli_select_db($conexao,"meusite");

//executa a query e retorna valores da tabela "faleconosco"
$query = mysqli_query($conexao, "SELECT*FROM meusite");



//Listando valores da tabela faleconosco
// while ($tabela = mysqli_fetch_array($query)) {

// echo $tabela['nome'] . "<br>";
// echo $tabela['email'] ."<br>";
// }
?>
