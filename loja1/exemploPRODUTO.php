<?php
    require "conexao.php";
    //declaraçao dos vetores e variavel contadora
    $c = array(0);
    $d = array("");
    $i = array("");
    $q = array("0");
    $p = array("0.00");
    $z = 0;
    //consulta dos dados do bd
    $sql = "SELECT * FROM produtos;";
	$resultado = $conexao->query($sql);
	while($campo = $resultado->fetch_assoc()){
        //dados sendo carregados nos vetores
        $c[$z] = $campo["id_produto"];
        $d[$z] = $campo["descricao"];
        $i[$z] = $campo["imagem"];
        $q[$z] = $campo["quantidade"];
        $p[$z] = $campo["preco"];
        //contador sendo incrementado
        $z++;
    }
    $conexao->close();    
    //estrutura de repeticao para pecorrer os vetores
    for($x=0;$x<$z;$x++){
        echo "ID: " . $c[$x] . 
        " DESCRICAO: " . $d[$x] . 
        " IMAGEM: " . $i[$x] . 
        " QUANTIDADE: " . $q[$x] . 
        " PRECO: " . $p[$x] . 
        "<br>";
    }    
    
      
?>      