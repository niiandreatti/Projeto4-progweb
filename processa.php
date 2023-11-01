<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aluno = array(
        'nome' => $_POST['nome'],
        'ra' => $_POST['ra'],
        'sexo' => $_POST['sexo'],
        'idade' => $_POST['idade'],
        'endereco' => $_POST['endereco'],
        'telefone' => $_POST['telefone'],
        'email' => $_POST['email']
    );

    $_SESSION['alunos'][] = $aluno;

    header('Location: listagem.php');
} else {
    header('Location: cadastro.html');
}
