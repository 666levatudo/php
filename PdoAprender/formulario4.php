<?php
//chama os parametros de acesso do banco, que terá incluso a função de pdo;
require 'infoacessdb2.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Mensagens</title>
  </head>
  <body>
<!--FORMULARIO COM METODO POST-->
    <h1>CADASTRE SUA OBRA:</h1>
    <form action="recebeform5.php" method="POST">

    <label for="nome">Nome:</label><input type="text" name="nome" placeholder='Digite seu nome'><br><br>
    <label for="email">Email:</label><input type="text" name="email" placeholder='Digite seu email'><br><br>
    <label for="genero">Genero:</label><input type="text" name="genero" placeholder='Digite o genero da Obra'><br><br>
    <label for="sinopse">Sinopse:</label><textarea name="sinopse" rows="10" cols="50"></textarea><br><br>
    <input type="submit" name="Cadastrar" value="Cadastrar">

    </form>

  </body>
</html>
