<?php
if (isset($_POST['nome']) && !empty($_POST['nome']) &&
    // ... outras validações
    isset($_POST['hora']) && !empty($_POST['hora'])) {

    // Validação da data
    $dataAgendamento = DateTime::createFromFormat('Y-m-d', $_POST['data']);
    if ($dataAgendamento === false || $dataAgendamento->getTimestamp() <= time()) {
        echo "A data escolhida não é válida ou já passou.";
        exit;
    }

    // Conexão com o banco de dados (ajuste as credenciais)
    $host = "localhost";
    $dbname = "meu_banco";
    $user = "meu_usuario";
    $password = "minha_senha";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar e executar a consulta
        $stmt = $pdo->prepare("INSERT INTO agendamentos (corte, data, hora, dataAgendamento) VALUES (?, ?, ?, ?)");
        $timestamp = $dataAgendamento->getTimestamp();
        $stmt->execute([$_POST['corte'], $_POST['data'], $_POST['hora'], $timestamp]);

        echo "Agendamento realizado com sucesso!";
    } catch(PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Por favor, preencha todos os campos obrigatórios.";
}


?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Corte de Cabelo</title>
    <link rel="stylesheet" href="agendamento-corte.css"> <!-- Link para um arquivo CSS, se necessário -->
</head>
<body>
    <div class="container">
        <h1>Agende seu Corte de Cabelo</h1>
        <form action="processa_agendamento.php" method="POST">
    <label for="servicos">Serviços:</label>
    <textarea id="servicos" name="servicos" required></textarea>

    <label for="barbeiro">Barbeiro:</label>
    <select id="barbeiro" name="barbeiro" required>
        </select>

    <label for="forma_pagamento">Forma de pagamento:</label>
    <select id="forma_pagamento" name="forma_pagamento" required>
        <option value="dinheiro">Dinheiro</option>
        <option value="cartao">Cartão</option>
        </select>

    </form>
    </div>
</body>
</html>