
<?php
session_start();

// Captura os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Verifica se os dados correspondem ao usuário administrador
if ($email === 'admin@admin.com' && $senha === '12345') {
    // Armazena o usuário na sessão
    $_SESSION['usuario'] = $email;

    // Redireciona para o painel
    header('Location: painel.php');
    exit;
} else {
    // Exibe mensagem de erro
    echo "Usuário ou senha inválidos!";
}
?>