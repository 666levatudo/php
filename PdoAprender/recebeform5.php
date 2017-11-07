<?php
//novamente conecta ao banco de dados com parametros e a função [funcaoconectaPDO1.php];
require_once 'infoacessdb2.php';
//recebe dados do formulario via POST, compara usando isset e se não tiver valor, já os preenche com null;
$nome = isset($_POST['nome']) ? $_POST['nome']: null;
$email = isset($_POST['email']) ? $_POST['email']: null;
$genero = isset($_POST['genero']) ? $_POST['genero']: null;
$sinopse = isset($_POST['sinopse']) ? $_POST['sinopse']: null;


//conferir se existem dados sem estar preenchidos, ja que o que não tinha valor, foi dado o valor de nulo acima;

if (empty($nome) || empty($email) || empty($genero) || empty($sinopse)){
  echo "Por favor, volte e preencha tudo, todos os dados são relevantes!";
  exit;
}
//inserir valores no DATA base criado:
$PDO = PDO_CONECT();//conecta banco
$banco_cadastro = "INSERT  INTO  livros(nome, email, genero, sinopse) VALUES (:nome, :email, :genero, :sinopse)";//comando sql
$inserir_banco = $PDO->prepare($banco_cadastro);
$inserir_banco->bindPAram(':nome',$nome);
$inserir_banco->bindPAram(':email',$email);
$inserir_banco->bindPAram(':genero',$genero);
$inserir_banco->bindPAram(':sinopse',$sinopse);

if($inserir_banco->execute()){ // executa a inserção do array obtido no sql, através da variavel $inserir_banco
  header('Location: formredirect3.php');
}else {
  echo "Erro ao cadastrar";
  print_r($inserir_banco->errorInfo());// imprime o erro atravez do print_r, podia ser um var_dump também,
}
 ?>
