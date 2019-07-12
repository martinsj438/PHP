<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
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
				<div class="col-md-12"><h1></h1></div>
			</div>
		</div>
		<div class="container" style="height: 45%;">
			<div class="row">
				<div class="col-md-12 text-center"><h1>Produtos</h1></div>
			</div>
		</div>
		<div class="container" style="height: 45%;">
		<?php
			$idproduto = 0;
			$descricao = "";
			$imagem = "";
			$quantidade = 0;
			$preco = 0.00;
			require "conexao.php";
			$sql = "SELECT * FROM produtos;";
			$resultado = $conexao->query($sql);
			while($campo = $resultado->fetch_assoc()){
				$idproduto = $campo["id_produto"];
				$descricao = $campo["descricao"];
				$imagem = $campo["imagem"];
				$quantidade = $campo["quantidade"];
				$preco = $campo["preco"];
				echo '
			<div class="row">
				<div class="col-md-4">
					<div class="box">
						<center>
							<form action="#">
								<figure class="col-8">
									<img src="'.$imagem.'" class="img-fluid"/>
								</figure>
								<div>
									<label class="tituloBox">
										'.$descricao.'
									</label>
								</div>
								<div>
									<label class="precoBox">
										'.$preco.'
									</label>
								</div>
								<div>
									<button class="btn btn-outline-dark" type="submit">Comprar</button>
								</div>
							</form>
						</center>
					</div>
				</div>
			</div>
			';
			}
			$conexao->close();
		?>
        </div>
	</body>
</html>
