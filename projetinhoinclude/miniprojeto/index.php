
<!-- TUDO DEPOIS DE INDEX NO NAVEGADOR => "?PG =<PAGINA QUE QUERO>"-->
	<?php
	include_once("conecta.inc.php");
	?>
<!DOCTYPE html>
<html>
<head>
	<title>MANDINGA DIGITAL</title>
</head>
<body>
	<table>
	<tr>
		<td> TOPO</td>	
	</tr>
	</table>	
	<!-- gerencia o conteudo -->
	<?php

if(empty($_SERVER["QUERY_STRING"])){
	$var = "principal.php";
	include_once("$var");

}else{
	$pg = $_GET['pg'];
	include_once("$pg.php");
}



     ?>
	
	<tr>
     <td>MENU<a href="?pg=principal">quem somos?</a>
     	<a href="?pg=clientes">Clientes</a>
     	<a href="?pg=faleconosco">Faleconosco</a>
     </td>
	</tr>

	<table>
	<tr>
		<td>RODAPE</td>	
	</tr>
	</table>		
</body>
</html>




