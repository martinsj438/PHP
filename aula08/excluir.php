<?php
	//excluir.php
	
	require "conexao.php";
	
	$id = $_POST["id"];
	$u = "";
	$sql = "SELECT * FROM usuarios WHERE id_usuario={$id};";
	$resultado = $conexao->query($sql);
	while($campo = $resultado->fetch_assoc()){
		$u = $campo["usuario"];
	}
	$conexao->close();
?>