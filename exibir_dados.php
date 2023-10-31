<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Informações do Aluno</title>
</head>
<body>
    <h1>Informações do Aluno</h1>
    <p>Nome: <?php echo htmlspecialchars($_GET["nome"]); ?></p>
    <p>RA: <?php echo htmlspecialchars($_GET["ra"]); ?></p>
    <p>Sexo: <?php echo htmlspecialchars($_GET["sexo"]); ?></p>
    <p>Idade: <?php echo htmlspecialchars($_GET["idade"]); ?></p>
    <p>Endereço: <?php echo htmlspecialchars($_GET["endereco"]); ?></p>
    <p>Telefone: <?php echo htmlspecialchars($_GET["telefone"]); ?></p>
    <p>E-mail: <?php echo htmlspecialchars($_GET["email"]); ?></p>
</body>
</html>
