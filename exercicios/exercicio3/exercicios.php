<?php

$niver = $_POST[ 'niver'];
$ano = $_POST[ 'ano'];


$idade = $ano - $niver - 1;

echo  "sua idade é de : " . $idade;

?>