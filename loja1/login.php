<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<title>Resultado LOGIN</title>
    </head>
	<body>
		<center>
			<?php
				// Inicializar SESSION para utilizar nesta PAGINA
				session_start();

				// Variáveis recebem dados do POST (criptografados - ninguém vê)
				$u = $_POST["usuario"];
				$s = $_POST["senha"];

				$erro = 0;

				// Conectar o BD
				$conexao = new mysqli("localhost","root","","banco");

				// Verifica se está conectado
				if($conexao->error)
					die("Erro: " . $conexao->error);
				
				// Verifica LOGIN
				if(($u=="")||($s=="")){
					echo "<meta http-equiv='refresh' content='2;URL=login.html'>";
					echo "<br><br><h3><i>Você deixou Campo(s) Vazio(s)!!!</i></h3>";
				}else{
					$sql = "SELECT * FROM usuarios;";
					$resultado = $conexao->query($sql);
					while($campo = $resultado->fetch_assoc()){
						if(($u==$campo["usuario"])&&($s==$campo["senha"])){
							if($u=="admin"){
								echo "<meta http-equiv='refresh' content='3;URL=admin.php'>";
							echo "<br><br><h3><i>Redirecionando...</i></h3>";
							}else{
								echo "<meta http-equiv='refresh' content='3;URL=inicio.php'>";
								echo "<br><br><h3><i>Redirecionando...</i></h3>";
							}
							$_SESSION["usuario"] = $campo["nome"];
							$erro = 0;
							break;
						}else{
							$erro = 1;
						}
					}
					if($erro==1){
						echo "<meta http-equiv='refresh' content='2;URL=login.html'>";
						echo "<br><br><h3><i>Os Dados informados são Inválidos!!!</i></h3>";
					}
				}
				$conexao->close();
			?>
		</center>
	</body>		
</html>