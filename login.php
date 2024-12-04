<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                <i class="fas fa-envelope"></i>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
                <i class="fas fa-lock"></i>

                <button type="submit">Entrar</button>

            </form>
            <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a>.</p>
        </div>
    </header>

    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/your-kit-id.js"></script>
</body>

</html>    

 
 