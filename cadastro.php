<?php
require 'funcoes.php';

if(isset($_POST['cadastrar'])){
	//Capturar os dados digitados
	$nome = $_POST['name'];
	$email = $_POST['email'];

	
	// Capturando a senha e a codificando
	$senha = password_hash($_POST['password'], PASSWORD_DEFAULT);

	//Executando a funcao inserirUsuario
	inserirUsuario($conexao, $nome, $email, $senha);

	//Redirecionamento

	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <nav class="menu-login">
            <a href="index.php">Home</a>
        </nav>

        <div class="container">
            <h1>Cadastro</h1>
            <form id="registrationForm" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" name="cadastrar">Cadastrar</button>
            </form>
            <p>Já tem uma conta? <a href="login.php">Faça login aqui</a>.</p>
        </div>

    </header>


    <script src="js/script.js"></script>
</body>

</html>