<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Peças</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <CENTER>
    <div class="peca">
    <h1>CADASTRO - PEÇAS</h1>
    <form method="post" action="cadastrarBanco.php">
        <label>Nome: </label>
        <input type="text" name="nome" size="20"><br>
        <label>Quantidade</label>
        <input type="number" name="quantidade" size="20"><br>
        <label>Preço</label>
        <input type="number" name="preco" size="20"><br>
        <input type="submit" value="CADASTRAR" class="botao">
    </form>
    <br><br>
    </div>
</CENTER>
</body>
</html>