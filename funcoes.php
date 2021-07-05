<?php  
include "conexao.php";
//pegando lá do formulario.php
$gravarnome = $_POST['nome'];
$gravartipo = $_POST['tipo'];
$gravarmatricula = $_POST['matricula'];
$gravardata = $_POST['datanascimento'];
$gravarcpf = $_POST['cpf'];
$gravarrg = $_POST['rg'];
$gravaremail = $_POST['email'];
$gravarfone = $_POST['telefone'];
$gravarsenha = $_POST['senha'];
$gravarrua = $_POST['rua'];
$gravarbairro = $_POST['bairro'];
$gravarcidade = $_POST['cidade'];
$gravarestado = $_POST['estado'];
$gravarcep = $_POST['cep'];


$conexao = mysqli_connect("localhost","root","","projeto");
//nomes do banco 
$consulta = "INSERT into cadastro (nome,tipo,matricula,datanascimento,cpf,rg,email,telefone,senha,rua,bairro,cidade,estado,cep) values ('$gravarnome','$gravartipo','$gravarmatricula','$gravardata','$gravarcpf','$gravarrg','$gravaremail','$gravarfone','$gravarsenha','$gravarrua','$gravarbairro','$gravarcidade','$gravarestado','$gravarcep')";

//cria uma query para executar a consulta
if ($_GET['funcao']=='gravar') {	
$sqlgravar = mysqli_query($conexao,$consulta);

header("Location: visualizar.php");

}

if ($_GET['funcao']=='editar') {
	$id = $_GET['id'];
	$consulta = "UPDATE cadastro set nome='$gravarnome',tipo='$gravartipo', matricula='$gravarmatricula', datanascimento='$gravardata', cpf='$gravarcpf', rg='$gravarrg', email='$gravaremail', telefone='$gravarfone', senha='$gravarsenha', rua='$gravarrua', bairro='$gravarbairro', cidade='$gravarcidade', estado='$gravarestado', cep='$gravarcep' where idnome ='$id'";
	header ("Location: visualizar.php");
	//nome da coluna que vou atualizar
	$sqlalterar = mysqli_query ($conexao,$consulta);

}
if ($_GET['funcao']=='excluir') {
   $id= $_GET['id'];
   $consulta="DELETE from cadastro where idnome='$id'";
   $sqlexcluir= mysqli_query($conexao,$consulta);

header("Location: visualizar.php");

}



?>