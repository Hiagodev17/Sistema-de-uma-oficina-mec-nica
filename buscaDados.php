<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>buscaDados</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	

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

    $sql="SELECT * FROM `automecanicavenida`.`pecas` where `nome` = '".$nome."';";
                 
			$resultado = $conexao->query($sql);
			
			echo '<hr>';
			if($resultado->num_rows !=0){
                $row = $resultado -> fetch_array();
                $conexao -> close();
                echo '<p>Nome da Peça: ';
				echo $row[1] . '</p>';
				echo '<p>Quantidade: ';
				echo $row[2] . '</p>';
				echo '<p>Preço: ';
				echo $row[3] . '</p>';

            } else{
                $conexao -> close();
                echo 'Peça não encontrado!';
            }	
			echo "<br>";
		    echo "<a href='sair.php' class='botao'>Sair</a>";

}

?>
</body>
</html>