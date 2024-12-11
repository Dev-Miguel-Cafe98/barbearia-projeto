
<?php
require 'funcoes-acesso.php';
require 'funcoes.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Validação de dados
    if (empty($email) || empty($senha)) {
        header("Location: login.php?error=1");
        exit;
    }

    $usuario = buscarUsuario($conexao, $email);

	/*2-Etapa : tendo um usuário válido, vamos verificar a senha digitada 
	comparando com a senha cadastrada no banco de dados */

	if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
		login($usuario['id'], $usuario['nome']);
		//Redirecionar para admin/index.php
		header("location:index-logada.php");
		die();
	} else {
		//Senao, algo está errado (email e/ou senha) e nao pode entrar
		header("location:login.php?dados_incorretos");
		die();
	}
}

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script> 

</head>
<body class="login-page">
    <header>
        <nav class="menu-login">
            <a href="index.php">Home</a>
        </nav>
        <div class="container">
            <h1>Login</h1>
            <form id="loginForm" action="" method="post"> <!---  Add your form action! -->
                <div class="input-group">  <!--- Container for input and icon --->
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <i class="fas fa-envelope"></i> <!--- Email icon --->
                </div>
                <div class="input-group"> <!--- Container for input and icon --->
                    <label for="password">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                    <i class="fas fa-lock"></i> <!--- Lock icon --->
                </div>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </header>
    <!-- <script src="js/script.js"></script> -->
</body>
</html>
