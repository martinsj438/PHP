<html>
	<body>
		<center>
			<?php
				class Alterar{
					function a(){
						$i = $_POST["id"];
						$n = $_POST["nome"];
						$e = $_POST["email"];
						$u = $_POST["usuario"];
						$s = $_POST["senha"];
						require "conexao.php";
						$sql = "UPDATE usuarios SET nome='{$n}',email='{$e}',usuario='{$u}',senha='{$s}' WHERE id_usuario={$i};";
						if($conexao->query($sql) === TRUE){
							echo "<meta http-equiv='refresh' content='3;URL=admin.php'>";
							echo "<br><br><h3><i>Alterado com Sucesso!!!</i></h3>";
						}
					}
				}
				
				class Excluir{
					function e(){
						$i = $_POST["id"];
						require "conexao.php";
						$sql = "DELETE FROM usuarios WHERE id_usuario={$i};";
						if($conexao->query($sql) === TRUE){
							echo "<meta http-equiv='refresh' content='3;URL=admin.php'>";
							echo "<br><br><h3><i>Deletado com Sucesso!!!</i></h3>";
						}
					}
				}

				$alterar = new Alterar;
				$excluir = new Excluir;
				
				if (isset($_POST["f"]) AND empty($_POST["f"]) OR !isset($_POST["f"])){
					
				}else{
					if($_POST["f"] == "a")
						$alterar->a();
					if($_POST["f"] == "e")
						$excluir->e();
				}
			?>
		</center>
	</body>
</html>




