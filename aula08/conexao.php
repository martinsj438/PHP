<?php
// conexao.php

// Conectar o BD
$conexao = new mysqli("localhost","root","","banco");

// Verifica se está conectado
if($conexao->error)
	die("Erro: " . $conexao->error);