<?php

include_once("conecta.inc.php");

while ($tabela = mysqli_fetch_array($query)) {

echo $tabela['nome'] . "<br>";
echo $tabela['email'] ."<br>";
}

?>

github.com/danielbrandao