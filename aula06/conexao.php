<?php
    $conexao = new mysqli("localhost","root","","banco");
if($conexao->error)
    die("error: " . $conexao->error);
?>        
