<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Corte de Cabelo</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link para um arquivo CSS, se necessário -->
</head>
<body>
    <div class="container">
        <h1>Agende seu Corte de Cabelo</h1>
        <form action="processa_agendamento.php" method="POST">
            <label for="corte">Escolha o tipo de corte:</label>
            <select id="corte" name="corte" required>
                <option value="">Selecione um corte</option>
                <option value="corte1">Corte Clássico</option>
                <option value="corte2">Corte Moderno</option>
                <option value="corte3">Corte Estiloso</option>
                <option value="corte4">Corte Infantil</option>
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