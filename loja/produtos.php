<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="aula6.1.css">
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="aula6.1.js"></script> 
		<title>Produtos</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<a class="navbar-brand" href="inicio.php">Loja</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="inicio.php">Página Inicial</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="produtos.php">Produtos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Carrinho</a>
					</li>    
				</ul>
			</div>
			<div class="collapse navbar-collapse" id="collapsibleNavbar" style="float: right; width: 45%;"></div>
			<div class="collapse navbar-collapse" id="collapsibleNavbar" style="float: right">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="login.html">
							<?php
								session_start();
								if (isset($_SESSION["usuario"]) AND 
									empty($_SESSION["usuario"]) OR 
										!isset($_SESSION["usuario"])){
									echo "<a href='login.html'>Login</a>";
								}else{
									$u = $_SESSION["usuario"];
									echo "<a href='logout.php'>Olá, {$u}</a>";
								}
							?>
						</a>
					</li>    
				</ul>
			</div> 
		</nav>
		<div class="container" style="height: 45%;">
			<div class="row">
				<div class="col-md-12"><h1>&nbsp;</h1></div>
			</div>
		</div>
		<div class="container" style="height: 45%;padding:0px;">
			<div class="row">
				<div class="col-md-12 text-center"><h1>Produtos</h1></div>
			</div>
		</div>
		<div class="column">
			<div class="box" style="margin:30px;border:1px solid black;">
				<div>
					<label class="tituloBox">Placa-Mãe</label>
				</div>
				<div>
					<img src="img1.png" width="100" height="100" style="width:65%">
				</div>
				<div>
					<label class="precoBox">R$ 300,00</label>
				</div>
				<div>
					<label class="quantBox">
						Quantidade:<input type="number">
					</label>
					<a href="" class="btn btn-dark">Comprar</a> 
				</div>
			</div>	
			<div class="box" style="margin:30px;border:1px solid black;">
				<div>
					<label class="tituloBox">Gabinete</label>
				</div>
				<div>
					<img src="img2.png" width="100" height="100" style="width:65%">
				</div>
				<div>
					<label class="precoBox">R$ 300,00</label>
				</div>
				<div>
					<label class="quantBox">
						Quantidade:<input type="number">
					</label>
					<a href="" class="btn btn-dark">Comprar</a>  
				</div>
			</div>
			<div class="box" style="margin:30px;border:1px solid black;">
				<div>
					<label class="tituloBox">Placa de Video</label>
				</div>
				<div>
					<img src="img3.png" width="100" height="100" style="width:65%">
				</div>
				<div>
					<label class="precoBox">R$ 300,00</label>
				</div>
				<div>
					<label class="quantBox">
						Quantidade:<input type="number">
					</label>
					<a href="" class="btn btn-dark">Comprar</a>  
				</div>
			</div>
			<div class="box" style="margin:30px;border:1px solid black;">
				<div>
					<label class="tituloBox">Gabinete</label>
				</div>
				<div>
					<img src="img4.png" width="100" height="100" style="width:65%">
				</div>
				<div>
					<label class="precoBox">R$ 300,00</label>
				</div>
				<div>
					<label class="quantBox">
						Quantidade:<input type="number">
					</label>
					<a href="" class="btn btn-dark">Comprar</a>  
				</div>
			</div>
			<div class="box" style="margin:30px;border:1px solid black;">
				<div>
					<label class="tituloBox">Notbook</label>
				</div>
				<div>
					<img src="img5.png" width="100" height="100" style="width:65%">
				</div>
				<div>
					<label class="precoBox">R$ 300,00</label>
				</div>
				<div>
					<label class="quantBox">
						Quantidade:<input type="number">
					</label>
					<a href="" class="btn btn-dark">Comprar</a>  
				</div>
			</div>
			<div class="box" style="margin:30px;border:1px solid black;">
				<div>
					<label class="tituloBox">Gabinete</label>
				</div>
				<div>
					<img src="img6.png" width="100" height="100" style="width:65%">
				</div>
				<div>
					<label class="precoBox">R$ 300,00</label>
				</div>
				<div>
					<label class="quantBox">
						Quantidade:<input type="number">
					</label>
					<a href="" class="btn btn-dark">Comprar</a>  
				</div>
			</div>
			<div class="box" style="margin:30px;border:1px solid black;">
				<div>
					<label class="tituloBox">Servidor</label>
				</div>
				<div>
					<img src="img7.png" width="100" height="100" style="width:65%">
				</div>
				<div>
					<label class="precoBox">R$ 300,00</label>
				</div>
				<div>
					<label class="quantBox">
						Quantidade:<input type="number">
					</label>
					<a href="" class="btn btn-dark">Comprar</a>  
				</div>
			</div>
			<div class="box" style="margin:30px;border:1px solid black;">
				<div>
					<label class="tituloBox">Teclado</label>
				</div>
				<div>
					<img src="img8.png" width="100" height="100" style="width:65%">
				</div>
				<div>
					<label class="precoBox">R$ 300,00</label>
				</div>
				<div>
					<label class="quantBox">
						Quantidade:<input type="number">
					</label>
					<a href="" class="btn btn-dark">Comprar</a> 
				</div>
			</div>
		</div>	
	</body>
</html>
