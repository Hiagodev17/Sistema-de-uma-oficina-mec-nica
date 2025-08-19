<?php

$hostname = "127.0.0.1";
$user = "root";
$password = "root";
$database = "automecanicavenida";

$conexao = new mysqli($hostname, $user, $password, $database);

if($conexao->connect_errno) {
    echo "Failed to connect to MySQL: " . $conexao->connect_error;
    exit();
} else{
    // Evita caracteres especiais (SQL Inject)
    $nome = $conexao->real_escape_string($_POST['nome']);
    $quantidade = $conexao->real_escape_string($_POST['quantidade']);
    $preco = $conexao->real_escape_string($_POST['preco']);

    $sql = "INSERT INTO pecas (`nome`, `quantidade`, `preco`) 
            VALUES ('".$nome."', '".$quantidade."' , '".$preco."');";
   
    $resultado = $conexao->query($sql);

    $conexao->close();
    header('Location: index.php', true, 301);

}

?>