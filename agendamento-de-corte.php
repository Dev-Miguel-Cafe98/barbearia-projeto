<?php

// ... (código existente)

// Validação básica (adicione mais validações conforme necessário)
if (empty($_POST['servicos']) || empty($_POST['data_agendamento']) || empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['endereco']) || empty($_POST['email']) ||  empty($_POST['barbeiro']) || empty($_POST['status']) || empty($_POST['preco']) || empty($_POST['forma_pagamento']) || empty($_POST['valor_total'])) { 
    echo "Por favor, preencha todos os campos.";
    exit;
}

// Verificação da data (exemplo básico)
$dataAgendamento = strtotime($_POST['data']);
if ($dataAgendamento <= time()) {
    echo "A data escolhida não é válida.";
    exit;
}

// ... (resto do código)

// Salvar no banco de dados (exemplo com prepared statement)
$stmt = $pdo->prepare("INSERT INTO agendamentos (corte, data, hora) VALUES (?, ?, ?)");
$stmt->execute([$corte, $data, $hora]);
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
            <label for="corte">Escolha o tipo de corte:</label>
            <select id="corte" name="corte" required>
                <option value="">Selecione um corte</option>
                <option value="corte1">Corte Masculino</option>
                <option value="corte2">Corte + Barba</option>
                <option value="corte3">Barba</option>
                <option value="corte4">Barba + Design</option>
                <option value="corte5">Corte Infantil</option>
            </select>

            <label for="data">Escolha a data:</label>
            <input type="date" id="data" name="data" required>

            <label for="hora">Escolha a hora:</label>
            <input type="time" id="hora" name="hora" required>

            <button type="submit">Agendar</button>
        </form>
    </div>
</body>
</html>