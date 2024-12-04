<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>

<body>
    <header>
        <nav class="menu-login">
            <a href="index.php">Home</a>
        </nav>

        <div class="container">
            <h1>Cadastro</h1>
            <form id="registrationForm">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Cadastrar</button>
            </form>
            <p>Já tem uma conta? <a href="login.php">Faça login aqui</a>.</p>
        </div>

    </header>


    <script src="js/script.js"></script>
</body>

</html>