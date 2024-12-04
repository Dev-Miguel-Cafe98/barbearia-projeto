<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body class="login-page">

    <header>
        <nav class="menu-login">
            <a href="index.php">Home</a>
        </nav>
        <div class="container">
            <h1>Login</h1>
            <form id="loginForm">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Entrar</button>

            </form>
            <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a>.</p>
        </div>
    </header>

    <script src="js/script.js"></script>
</body>

</html>