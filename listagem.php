<?php
session_start();
$alunos = isset($_SESSION['alunos']) ? $_SESSION['alunos'] : [];

usort($alunos, function ($a, $b) {
    return $a['ra'] - $b['ra'];
});
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Alunos</title>
</head>
<body>
    <header>
        <h1>Listagem de Alunos</h1>
        <nav>
            <ul>
                <li><a href="index.html">Cadastro de Alunos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <table>
            <tr>
                <th>RA</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Idade</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
            <?php foreach ($alunos as $aluno): ?>
                <tr>
                    <td><?php echo $aluno['ra']; ?></td>
                    <td><?php echo $aluno['nome']; ?></td>
                    <td><?php echo $aluno['sexo']; ?></td>
                    <td><?php echo $aluno['idade']; ?></td>
                    <td><?php echo $aluno['endereco']; ?></td>
                    <td><?php echo $aluno['telefone']; ?></td>
                    <td><?php echo $aluno['email']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>
</html>
