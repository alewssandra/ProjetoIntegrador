<?php  
include "conexao.php";
$conexao = conectar("localhost","root","","projeto");
$consulta = "select * from cadastro";
$con = mysqli_query($conexao,$consulta);
?>


<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<title>Projeto</title>
</head>
<body>
<h3>Buscando dados na tabela projeto</h3><br><br>
<table border="5">
<tr>
<td><center><B>Identificador</B></center></td>
<td><center><B>Nome</B></center></td>
<td><center><B>Tipo</B></center></td>
<td><center><B>Matricula</B></center></td>
<td><center><B>Data Nascimento</B></center></td>
<td><center><B>cpf</B></center></td>
<td><center><B>rg</B></center></td>
<td><center><B>email</B></center></td>
<td><center><B>telefone</B></center></td>
<td><center><B>senha</B></center></td>
<td><center><B>rua</B></center></td>
<td><center><B>bairro</B></center></td>
<td><center><B>cidade</B></center></td>
<td><center><B>estado</B></center></td>
<td><center><B>cep</B></center></td>
<td><center><b>Editar</b></center></td>
       <td><center><b>Excluir</b></center></td>
</tr>

<?php while ($resultado=mysqli_fetch_array($con)) { 
  //pegar o identificador do  aluno e enviar para a pagina de edição 
$id=$resultado["idnome"];

 ?>
<tr>
     <!--nomes do banco -->
<td><center><?php echo $resultado["idnome"]; ?> </center></td>

       <td><center><?php echo $resultado["nome"]; ?>  </center></td>
       <td><center><?php echo $resultado["tipo"]; ?>  </center></td>
       <td><center><?php echo $resultado["matricula"]; ?>  </center></td>
<td><center><?php echo date ('d/m/Y',strtotime ($resultado["datanascimento"])); ?>  </center></td>
           <td><center><?php echo $resultado["cpf"]; ?>  </center></td>
       <td><center><?php echo $resultado["rg"]; ?>  </center></td>
       <td><center><?php echo $resultado["email"]; ?>  </center></td>
       <td><center><?php echo $resultado["telefone"]; ?>  </center></td>
       <td><center><?php echo $resultado["senha"]; ?> </center></td>
       <td><center><?php echo $resultado["rua"]; ?>  </center></td>
       <td><center><?php echo $resultado["bairro"]; ?>  </center></td>
       <td><center><?php echo $resultado["cidade"]; ?>  </center></td>
        <td><center><?php echo $resultado["estado"]; ?>  </center></td>
       <td><center><?php echo $resultado["cep"]; ?>  </center></td>
       <td><center><a href="editar.php?funcao=editar&id=<?php echo $id ?>">Editar  </center></td>
         <td><center><a href="funcoes.php?funcao=excluir&id=<?php echo $id ?>">Excluir  </center></td>
 
</tr>
<?php } ?>	
</table>
<?php desconectar($conexao)  ?>
  <br>
  <input type="button" value="Login" onclick="location.href='login.php'">
<input type="button" value="Cadastrar" onclick="location.href='cadastro.php'">
</body>
</html>