<?php
	echo "<h3>Conectando o Banco</h3><br><br>";
    
    //Variaveis Declaradas / Variaveis Inicializadas
	$usuarioBD = "root";
	$senhaBD = "";
	$caminhoBD = "localhost";
	$BD = "banco";
    
    //Variavel que foi definido o caminho eo banco que sera conectado
    //inicia a conexao com o BD
    $conexao = new mysqli($caminhoBD,$usuarioBD,$senhaBD,$BD);
    
    //IF verifica se a conexao esta funcionando
	if($conexao->connect_error){
		die("nao conectado!!!, erro: " . $conexao->connect_error);
	}else{
		echo "conectado!!!<br><br><br>";
    }
    //definido tipo de comando sql para executar no BD
    $sql = "SELECT * FROM usuarios;";
    
    //executar sql
    $resultado = $conexao->query($sql);
    //verifica se o resultado tem / linhas se encontrou algo
    if(resultado->num_rows>0){
        //varre o resultado sql
        while($campo=$resultado->fetch_assoc()){
            //imprimi resultados-a-resultado
            echo "NOME: ".$campo["nome"]."<br>";
        }                
    }else{
        echo "Sem Resultado";
    }
    //fecha conexao com BD
    $conexao->close();
?>