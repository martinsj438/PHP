<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<title>Aula 08 - parte 02</title>
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
		<div class="w3-content w3-display-container">
			<img class="mySlides" src="banner.png" style="width:100%">
			<img class="mySlides" src="banner1.png" style="width:100%">
			<img class="mySlides" src="banner2.png" style="width:100%">
			<img class="mySlides" src="banner3.png" style="width:100%">
			<center>
				<button class="w3-button w3-display-center" onclick="plusDivs(-1)">&#10094;</button>
				<button class="w3-button w3-display-center" onclick="plusDivs(+1)">&#10095;</button>
			</center>	
		</div>
		<script>
			var slideIndex = 0;
			carousel();

			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
				x[i].style.display = "none"; 
				}
				slideIndex++;
				if (slideIndex > x.length) {slideIndex = 1} 
				x[slideIndex-1].style.display = "block"; 
				setTimeout(carousel, 2000); // Change image every 2 seconds
			}
		</script>

	</body>
</html>
