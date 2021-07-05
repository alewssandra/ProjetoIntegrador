<?php 
include "conexao.php";
$conexao = conectar("localhost","root","","projeto");
if ($_GET['funcao']=='editar') {
	$id =$_GET['id'] ;
	$consultaupdate= "SELECT * from cadastro where idnome = '$id'" ;
	$con = mysqli_query ($conexao,$consultaupdate);
	while($resultado=mysqli_fetch_array ($con)) {

		$nome = $resultado ['nome'];
		$tipo = $resultado ['tipo'];
		$matricula = $resultado ['matricula'];
		$datanascimento = $resultado ['datanascimento'];
		$cpf = $resultado ['cpf'];
		$rg = $resultado ['rg'];
		$email = $resultado ['email'];
		$telefone = $resultado ['telefone'];
		$senha = $resultado ['senha'];
		$rua = $resultado ['rua'];
		$bairro = $resultado ['bairro'];
		$cidade = $resultado ['cidade'];
		$estado = $resultado ['estado'];
		$cep = $resultado ['cep'];

	}

?>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<nav class="navbar navbar-expand-sm navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
   
      
      <div class="container">
        
			<img src="images/lages.png" alt="logo do ifsc campus Lages" width="200" height="100">
        </div>
	   
		 <div class="container">
		  <ul class="navbar-nav mr-auto">
		  <li class="nav-item active">  <a href="index.html" class="nav-link">Pagina Principal</a> </li>
			<li class="nav-item active"> <a href="login.html" class="nav-link">Efetuar login</a> </li>
			<li class="nav-item active"> <a href="cadastro.html" class="nav-link">Cadastro</a> </li>
			<li class="nav-item active"> <a href="programação.html" class="nav-link">Programação</a> </li>
			<li class="nav-item active"> <a href="sobre.html" class="nav-link">Sobre</a> </li>
			<li class="nav-item active"> <a href="contato.html" class="nav-link">Contato</a> </li>

			
			</ul>
		</div>
		</div>

		
    </nav>
	<style type="text/css">
		
		footer{
       background: #f8f9fa;
       color: black;
        padding: 30px;
      
    
    }

	li {
      padding: 5px;
    }
	.esp {
	
	padding: 20px;
	}
	</style>
	
	<form action="funcoes.php?funcao=editar&id=<?php echo $id ?>" method="POST">

      <div class="esp">
	<div class="container">
		<div class="row">
			<div class="col-md-8" >
					<div class="form-group">
						<h1>Formulário</h1>
						<h2>Atualizar Cadastro</h2>
						<h3>Marque os campos abaixo para se cadastrar:</h3>
						<div class="form-group">
							<label>Nome:</label>
							<input type="text" name="nome"  value="<?php echo $nome ?>" placeholder="Digite o seu nome" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Tipo de participante:</label><br>
    <input type="radio" name="tipo" value="aluno"  value="<?php echo $tipo ?>"  <?php echo ($tipo == "aluno")?"checked" :null; ?> required=""> Aluno
  <input type="radio" name="tipo" value="comunidade" value="<?php echo $tipo ?>"  <?php echo ($tipo == "comunidade")?"checked" :null; ?> > Comunidade Externa
      <input type="radio" name="tipo" value="servidor" value="<?php echo $tipo ?>"  <?php echo ($tipo == "servidor")?"checked" :null; ?> > Servidor
                              <br><br>
						</div>
						<div class="form-group" id="matricula">
							<label>Matrícula</label>
							<input type="text" name="matricula" value="<?php echo $matricula ?>" placeholder="Digite a sua matricula" class="form-control">
						</div>
						<div class="form-group">
							<label>Data de Aniversário:</label>
						<input type="date" name="datanascimento" value="<?php echo $datanascimento ?>" class="form-control"required="required">
						</div>
						<div class="form-group">
							<label>CPF:</label>
						<input type="text" name="cpf"  value="<?php echo $cpf ?>"placeholder="Digite o seu CPF" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>RG:</label>
							<input type="text" name="rg" value="<?php echo $rg ?>" placeholder="Digite o seu RG" class="form-control"required="required">
						</div>
						<div class="form-group">
							<label>E-mail:</label>
							<input type="email" name="email" value="<?php echo $email ?>" placeholder="Digite o seu Email" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Telefone</label>
							<input type="text" name="telefone" value="<?php echo $telefone ?>" placeholder="Digite o seu número de telefone" class="form-control" required="required"  >
						</div>
						<div class="form-group">
							<label>Senha</label>
							<input type="password" name="senha" value="<?php echo $senha ?>" placeholder="Digite uma senha" class="form-control" required="required">
						</div>
					</div>
					
				</div>
				<div class="col-sm-4">
				<div class="form-group">
					<h1>Endereço</h1>
					<h3>Digite seu endereço:</h3>
					<div class="form-group">
						<label>Rua:</label>
						<input type="text" name="rua" value="<?php echo $rua ?>" placeholder="Digite a rua onde mora" class="form-control" required="required">
					</div>
						<div class="form-group" >
						<label>Bairro:</label>
						<input type="text" name="bairro" value="<?php echo $bairro ?>" placeholder="Digite o bairro onde mora" class="form-control"required="required" >
					</div>
						<div class="form-group" >
						<label>Cidade:</label>
						<input type="text" name="cidade" value="<?php echo $cidade ?>" placeholder="Digite a cidade onde mora" class="form-control"required="required" >
					</div>
					<div class="form-group" >
						<label>Estado:</label>
						<input type="text" name="estado" value="<?php echo $estado ?>" placeholder="Digite o estado onde mora" class="form-control"required="required" >
					</div>
						<div class="form-group" >
							<label>Cep:</label>
							<input type="text" name="cep" value="<?php echo $cep ?>" placeholder="Digite o seu CEP" class="form-control" required="required">
						</div>
					</div>
				
			 </div>
			
		     </div>
				<input type="submit" value="cadastrar" onclick="Alerta()">
				<input type="button" value="Ver dados cadastrados" onclick="location.href='visualizar.php'">
               </div>
           </div>
			
<script type="text/javascript">
  function Alerta() {
alert("Cadastro realizado com sucesso");
}

</script>



<footer class="section footer-classic context-dark bg-image"style="background-color: #D3D3D3;">
    <div class="row">

      <div class="col-sm-3">
          <p>
          	<h4>Horários<hr></h4>
    Das 8:00 horas as 12:00 horas.<br>
    Das 13:30 horas as 17:00 horas.<br>
    Das 18:30 horas as 22:00 horas.
	</p>
      </div>

      
       <div class="col-sm-3"> 
		<p> <h4>Endereço:<hr></h4> 
		R. Heitor Villa Lobos, 222
		São Francisco
		Lages – SC
		88506-400</p>
        </div>

        <div class="col-sm-3">             
		<p> <h4>Contato:<hr></h4>
		Telefone: (49) 3221-4200 </p>
          </div>
          <div class="col-sm-3">
         <p> <h4>Localização<hr></h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3529.14812050852!2d-50.339757784773425!3d-27.80521123771203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e018b1f588926d%3A0x3e6066bf0fc8fdb1!2sIFSC+C%C3%A2mpus+Lages!5e0!3m2!1spt-BR!2sbr!4v1542219631301" width="250" height="150" frameborder="0" style="border:0" allowfullscreen></iframe> </p>
         
        </div>
      </div>
        
          
</footer>
</form>
<?php desconectar($conexao); } ?>
