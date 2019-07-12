<?php
	echo "<h3>Página 2</h3><br><br>";
	
	$usuarioBD = "root";
	$senhaBD = "";
	$caminhoBD = "localhost";
	$BD = "banco";
	
	$conexao = new mysqli($caminhoBD,$usuarioBD,$senhaBD,$BD);
		
		if($conexao->connect_error){
			die("nao conectado!!!, erro:" . $conexao->connect_error");
		}else{
			echo "conectado!!!";
		}	
?>