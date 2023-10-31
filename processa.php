<?php
if(isset($_POST["submit"])){
    $aluno = array(
        "nome" => $_POST["nome"],
        "ra" => $_POST["ra"],
        "sexo" => $_POST["sexo"],
        "idade" => $_POST["idade"],
        "endereco" => $_POST["endereco"],
        "telefone" => $_POST["telefone"],
        "email" => $_POST["email"]
    );

    // Adicione o aluno ao array de alunos
    // Adicione o aluno ao array de alunos
$alunos[] = $aluno;

// Mensagem de depuração
echo "Redirecionando para exibir_dados.php";

// Redirecione o usuário para a página de exibição com os dados do aluno
header("Location: exibir_dados?nome=" . urlencode($aluno["nome"]) . "&ra=" . urlencode($aluno["ra"]) . "&sexo=" . urlencode($aluno["sexo"]) . "&idade=" . urlencode($aluno["idade"]) . "&endereco=" . urlencode($aluno["endereco"]) . "&telefone=" . urlencode($aluno["telefone"]) . "&email=" . urlencode($aluno["email"]));

}
?>