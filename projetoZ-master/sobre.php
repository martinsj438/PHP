<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Quem Somos</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width; initial-scale=1, shrink-to-fit=no"/>

	<!-- ICON, BOOTSTRAP, CSS -->
	<link rel = "shortcut icon" type = "imagem/x-icon" href = "assets/images/favicon1.ico"/>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/styleIndex.css"/>
	<link rel="stylesheet" href="assets/css/styleSobre.css"/>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">

	<!-- <script src="assets/js/mostrarMenu.js"></script> -->
</head>
<body>
	<!-- Área de CONTATO -->
	<div class="modal fade" id="modalContato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cadastre-se para receber as novidades sobre os melhores destinos do Brasil</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
					<form method="POST">
						<div class="form-group">
							<label>Nome</label>
							<input type="text" name="nome" placeholder="Digite seu nome..." class="form-control" />
						</div>
						<div class="form-group">
							<label>E-mail</label>
							<input type="text" name="email" placeholder="Digite seu e-mail..." class="form-control" />
						</div>

						<div class="modal-footer d-flex justify-content-around">
							<button type="reset" class="btn btn-secondary col-md-3">Limpar</button>
							<button type="submit" class="btn btn-info col-md-4">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


<!-- =========================================================================== -->


	<div id="topo2">
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="index.php">
		          <img src="assets/images/brasilturismo.png" style="width:180px;">
		        </a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Inicio
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="sobre.php">Sobre Nós</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#modalContato">Contato</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- div class="row d-flex justify-content-center align-items-center inteiro">
			<strong id="part1">Brasil</strong>
			<img src="assets/images/mais.png" height="200" />
			<strong id="part2">Turismo</strong>
		</div> -->
	</div>

	<div class="container text-light" id="corpo">
		<header class="text-center">
			<h1>Quem Somos</h1>
			<hr style="border-bottom: 2px solid #28a745; width: 90px;">
		</header>

		<section class="row content" id="containerInt">
			<div class="col-md-4 d-flex justify-content-center">
				<img id="nos" src="assets/images/sobreNos.jpg" height="300" />
			</div>
			<div class="col-md-8 text-justify">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</section>		
	</div>

	<footer class="container-fluid" id="rodape">
		<div class="container d-flex justify-content-center">
			<img src="assets/images/brasilturismo.png" height="30"/>

			<span>&nbsp;&nbsp;&copy; 2018 Todos os direitos reservados</span>
		</div>
	</footer>

	<!-- JQUERY, POPPER, BOOTSTRAP -->
	<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- <script type="text/javascript">
		window.setInterval(exibir(), 1000);
	</script> -->
</body>
</html>