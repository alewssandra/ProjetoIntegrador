<?php

include 'login.class.php';

error_reporting(0);

$login = new Login();


if ($_POST["botao"] == "Logar") {

    $msg = $login->verificaSelecao($_POST['email'], $_POST['senha']);
    //echo $msg;
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="styles/login.css" rel="stylesheet">
</head>

<body class="text-center">
	<header class="masthead mb-auto">
		<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">

				<a href="index.html"><img src="images/lages.png" width="200" height="100"></a>
				<div class="container">

					<ul class="navbar-nav mr-auto">
						<h5 class="my-0 mr-md-auto font-weight-normal"></h5>
						<li class="nav-item active"> <a href="index.html" class="nav-link">Principal</a> </li>
						<li class="nav-item active"> <a href="login.php" class="nav-link">Login</a> </li>
						<li class="nav-item active"> <a href="cadastro.php" class="nav-link">Cadastro</a> </li>
						<li class="nav-item active"> <a href="programação.html" class="nav-link">Programação</a>
						</li>
						<li class="nav-item active"> <a href="sobre.html" class="nav-link">Sobre</a> </li>
						<li class="nav-item active"> <a href="contato.html" class="nav-link">Contato</a> </li>

					</ul>
				</div>

			</div>
		</nav>
	</header>
	<form method="post" name="form" action="login.php" class="form-signin">

		<h1 class="h3 mb-3 font-weight-normal">Login</h1>

		<div class="form-group">
			<label for="Email">Endereço de email</label>
			<input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp" placeholder="Seu email">
		</div>
		<div class="form-group">
			<label for="Password">Senha</label>
			<input type="password" class="form-control" name="senha" id="Password" placeholder="Senha">
		</div>
		<?php echo $msg; ?>
		<p> Você não possui cadastro? <a href="cadastro.php">Clique Aqui!</a></p>
		<button type="submit" class="btn btn-lg btn-success" type="submit" name="botao" value="Logar">Enviar</button>

	</form>
</body>

</html>