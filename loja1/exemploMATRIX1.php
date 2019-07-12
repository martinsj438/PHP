<?php
	require "conexao.php";
	// Declaracao dos vetores e variabel contadora?><pre><?php
	$brasil = array(
		"Sudeste" => array(
			"Rio de Janeiro" => "cidade maravilhosa",
			"São Paulo" => "Conhecido como  "
		),
		"Norte" => array(
			"Amazonas" => "Pulmão do mundo!",
			"Maranhão" => "Lençóis maranhenses"
		),
		"Sul" => array(
			"Paraná" => "Onde algo aconteceu"
		)
	);
	
	print_r($brasil);?></pre><br><br><?php
	echo $brasil["Sudeste"]["Rio de Janeiro"];
	?><br><br><?php
	
	$z = 0;
	
	// Consulta dos DADOS do BD
	$sql = "SELECT * FROM produtos;";
	$resultado = $conexao->query($sql);
	while($campo = $resultado->fetch_assoc()){
		// Dados sendo carregados nos vetores
		$c[$z] = $campo["id_produto"];
		$d[$z] = $campo["descricao"];
		$i[$z] = $campo["imagem"];
		$q[$z] = $campo["quantidade"];
		$p[$z] = $campo["preco"];
		// Contador sendo INCREMENTADO
		$z++;
	}
	$conexao->close();
	// Estrutura de REPETICAO para percorrer os vetores
	for($x=0;$x<$z;$x++){
		echo "ID: " . $c[$x] .
			" DESCRICAO: " . $d[$x] .
			" IMAGEM: " . $i[$x] .
			" QUANTIDADE: " . $q[$x] .
			" PRECO: " . $p[$x] .
			"<br>";
	}
	
?>