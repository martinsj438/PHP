<?php
	try
	{
		$pdo = new PDO("mysql:dbname=projeto_z; host=localhost", "root", "");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// echo "Conexão estabelecida com sucesso!";
	}
	catch(PDOException $e)
	{
		echo "Falha na conexão: ".$e->getMessage();
	}


	if(isset($_POST['email']) && !empty($_POST['email']))
	{
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		$sql = $pdo->prepare("SELECT * FROM interessados WHERE nome = :nome OR email = :email;");

		$sql->bindValue(":nome", $nome, PDO::PARAM_STR);
		$sql->bindValue(":email", $email, PDO::PARAM_STR);
		$sql->execute();

		if($sql->rowCount() == 0)
		{
			$sql = $pdo->prepare("INSERT INTO interessados(nome,email) VALUES (:nome,:email);");
			$sql->bindValue(":nome", $nome, PDO::PARAM_STR);
			$sql->bindValue(":email", $email, PDO::PARAM_STR);
			$sql->execute();

			header("Location: index.php");
			exit();
		}
		else
		{
			?>
				<script>
					alert("Você já está cadastrado!");
				</script>
			<?php
		}
	}
?>