<?php
 // funcoes.php
 
	class Alterar{
		function a(){
            echo "Dados recebidos para Alteração no bd";
            echo "ID : " . $_POST["id_usuario"] . "<br>";
            echo "NOME : " . $_POST["nome"] . "<br>";
            echo "EMAIL : " . $_POST["email"] . "<br>";
            echo "USUARIO : " . $_POST["usuario"] . "<br>";
            echo "SENHA : " . $_POST["senha"] . "<br>";
		}
    }
    function b(){
        $i = $_POST["id"];
        $n = $_POST["nome"];
        $e = $_POST["email"];
        $u = $_POST["usuario"];
        $s = $_POST["senha"];
        require "conexao.php"
        $sql = "UPDATE usuarios SET nome='{$n}, email=,
            VALUES ('{$n}','{$e}','{$u}','{$s}');";
        if($conexao->query($sql) === TRUE){
            $erro = "{$u}, você foi cadastrado com sucesso!!!";
        }
    }    
	class Excluir{
		function e(){
			echo "Excluir";
		}
	}
    
    //instalciar ou instanciando um classe
    //assim tem por herança, tudo o que a classe tem
	$alterar = new Alterar;
	$excluir = new Excluir;
	
	if (isset($_POST["f"]) AND empty($_POST["f"]) OR !isset($_POST["f"])){
	
	}else{
		if($_POST["f"] == "a")
			$alterar->a();
		if($_POST["f"] == "e")
            $excluir->e();
        if($_POST["f"] == "b")
			$excluir->b();	
	}	
?>

<html>
	<body>
		<center>
			<form action="funcoes.php" method="POST">
				<input type="hidden" name="f" value="a">
				<button type="submit">Alterar</button>
			</form>
			<form action="funcoes.php">
				<input type="hidden" name="f" value="e">
				<button type="submit">Excluir</button>
			</form>
		</center>
	</body>
</html>