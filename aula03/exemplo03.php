<?php
    $nome = $_GET["txtNome"];
    $email = $_GET["txtemail"];
	$usuario = $_GET["txtusuario"];
	$senha = $_GET["txtsenha"];
   
    $conexao = "new myqli("localhost","root","","banco");
    
    if($conexao->connect_error)
        die("nao conectado!!!, erro: " . $conexao->connect_error);
    
    $sql = "INSERT INTO usuarios(nome,email,usuario,senha)
        VALUES ('"$nome."','"$email"','"$usuario"','"$senha"')";    
    
    if(conexao->query($sql) === TRUE){echo "Cadastrado Com Sucesso!!!";}
    else{echo "Erro: " . $sql "<br>" . $conexao->error;}
    
    $conexao->close();
?>