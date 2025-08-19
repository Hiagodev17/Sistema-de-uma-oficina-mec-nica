<html>
    <head>
        <title>.: Meu lindo site :.</title>
    
		<link rel="stylesheet" href="style.css">
	</head>
	
    <body>
		<form method="post" action="buscaDados.php">
			<label>Digite o nome da Peça: </label>
			<input type="text" name="nome" size="20"><br><br>
			<input type="submit" value="BUSCAR">
		</form>
		<?php
			// iniciar uma sessão
			session_start();

			
				echo '<table>
					<tr>
						<td width=50%>
							<center>
							<span class="corBranca">Bem vindo</span>
							<br>
							
							</center>
						</td>
						
						</tr>
						
				</table>';
			

			$hostname = "127.0.0.1";
			$user = "root";
			$password = "root";
			$database = "automecanicavenida";
		
			$conexao = new mysqli($hostname,$user,$password,$database);

			$sql="SELECT * FROM `automecanicavenida`.`pecas`;";
                 
			$resultado = $conexao->query($sql);
			
			echo '<hr>';
				
			while($row = mysqli_fetch_array($resultado)){
				echo '<p>Nome da Peça: ';
				echo $row[1] . '</p>';
				
				echo '<p>Quantidade: ';
				echo $row[2] . "</p>";
				
				echo '<p>Preço: ' ;
				echo $row[3]. '</p>';
				

				
				echo '<hr>';
				echo '<br>';
			}
			$conexao -> close();
           
		?>
		<br>
		<a href="sair.php" class='botao'>Sair</a>
	</body>
</html>