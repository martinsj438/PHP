<?php

    // Variáveis recebem dados do POST (criptografados - ninguém vê)
    $n = $_POST["nome"];
    $e = $_POST["email"];
    $u = $_POST["usuario"];
    $s = $_POST["senha"];

    $erro = "nada";

    // Conectar o BD
    $conexao = new mysqli("localhost","root","","banco");

    // Verifica se está conectado
    if($conexao->error)
        die("Erro: " . $conexao->error);
    
    // Verifica LOGIN
    if(($n=="")||($e=="")||($u=="")||($s=="")){
        $erro = "você deixou campo(s) Vazio(s)!!!";
    }else{
        $sql = "INSERT INTO usuarios(nome,email,usuario,senha) 
            VALUES ('{$n}','{$e}','{$u}','{$s}');";
        if($conexao->query($sql) === TRUE){
            $erro = "{$n}, Você foi cadastrado com Sucesso!!!";
        }else{
            $erro = "Cadastro nao realizado!!!";
            //$erro += ", erro: " . $sql . "<br>" . $conexao->error;
        }
    }
    $conexao->close();
?>