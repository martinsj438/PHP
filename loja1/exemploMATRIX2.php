<?php
    require "conexao.php";
    //declaraçao dos vetores e variavel contadora?><pre><?php
    
    $produto = array("id_produto","descricao","imagem");
        "id_produto" => array(1,2,3,4,5,6),   
        "descricao" => array("produto 1","produto 2","produto 3","produto 4","produto 5","produto 6"),
        "imagem" => array("img/imagem001.jpg","img/imagem001.jpg","img/imagem001.jpg","img/imagem001.jpg","img/imagem001.jpg","img/imagem001.jpg"),
        "quantidade" => array(10,10,10,10,10,10),
        "preco" => array(1.10,2.20,3.30,4.40,5.50,6.60.0),
        
        print_r($produto);?></pre><?php
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

    echo "<br><br><br>";
    
    for($x=0;$x<$z;$x++){
        echo "ID: " . $produto["id_produto"][$x] .
        " DESCRICAO: " . $produto["descricao"][$x] .
        " IMAGEM: " . $produto["imagem"][$x] .
        " QUANTIDADE: " . $produto["quantidade"][$x] .
        " PRECO: " . $produto["preco"][$x] .
        "<br>";
    }    
    
      
?>      