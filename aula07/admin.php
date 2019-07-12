<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<title>Nossa Aula 06</title>
		<style>
			*{
				margin: 0;
				padding:0;
			}
			#menu{
				width: 15%;
				position: fixed; 
				float: rigth;
			 	margin: -14% auto auto 85%;
			}
		</style>
	</head>
	<body>
		<div class="jumbotron container-fluid text-center">
			<h1>Página do Administrador</h1>
		</div>
		<div id="menu" class="text-center">
			<?php
				session_start();
				if (isset($_SESSION["usuario"]) AND empty($_SESSION["usuario"]) OR !isset($_SESSION["usuario"])) {
					echo "<meta http-equiv='refresh' content='0.URL=inicio.php'>";
				}else{
					$usu = $_SESSION["usuario"];
					if($usu=="administrador geral"){
						echo "<a href='logout.php'>Olá, {$usu}</a>";
					}else{
						echo "<meta http-equiv='refresh' content='0.URL=inicio.php'>";
					}
				}
			?>
		</div>
		<div class="container" style="background: cinza; height: 450px;">
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<tr>
							<td>ID</td>
							<td>NOME</td>
							<td>EMAIL</td>
							<td>USUARIO</td>
							<td>SENHA</td>
							<td>ALTERA</td>
							<td>EXCLUIR</td>
						</tr>
						<?php
						require "conexao.php";
						$sql = "SELECT * FROM usuarios;";
						$resultado = $conexao->query($sql);
						while($campo = $resultado->fetch_assoc()){
							$i = $campo["id_usuario"];
							$n = $campo["nome"];
							$e = $campo["email"];
							$u = $campo["usuario"];
							$s = $campo["senha"];
							echo"<tr>
									<td>{$i}</td>
									<td>{$n}</td>
									<td>{$e}</td>
									<td>{$u}</td>
									<td>{$s}</td>
                                <td>
                                    <form action='alterar.php' method='post'>
                                        <input type='hidden'name='id' Value='{$i}'>
                                        <button a class='btn btn-info'>Alterar</button>
                                    </form>
                                </td>
                                <td>        
								    <form action='excluir.php' method='post'>
                                        <input type='hidden' name='id' Value='{$i}'>
                                        <button a class='btn btn-warning'>Excluir</button>
                                    </form>
                                </td>    
							</tr>";
						}
						$conexao->close();
					?>	
					</table>
				</div>
			</div>
		</div>
	</body>
</html>