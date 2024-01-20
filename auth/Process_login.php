<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('/opt/lampp/htdocs/cursos/mvcpoo/models/Login.php');


$client = new Login();

$nome = $_POST['username'];
$senha = $_POST['password'];

$user = $client->verifyCredentials($nome, $senha);

if ($user) {
    // Credenciais corretas - faz login e redireciona para a página principal
    session_start();
    $_SESSION['logged_in'] = true;
    header('Location: home.php');
    

    exit();
} else {
    // Credenciais incorretas - redireciona de volta para a página de login com mensagem de erro
    header('Location: loginForm.php?error=1');
    exit();
}

?>