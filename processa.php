<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

if (isset($_POST['submit'])) {
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

?>
