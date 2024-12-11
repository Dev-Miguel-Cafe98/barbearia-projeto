<?php
require 'funcoes.php';
$successMessage = "";
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $successMessage = "<p style='color: green;'>Sua mensagem foi enviada com sucesso!</p>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["phone"];
    $email = $_POST["email"];
    $servicos = $_POST["servicos"];
    $mensagem = $_POST["mensagem"];
    

    inserirUsuario($conexao, $nome, $telefone, $email, $servicos, $mensagem);
    header("Location: contato.php?success=1");

}

 


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Contato</title>
    <link rel="stylesheet" href="css/contato.css">
</head>
<body>
    <h1>CONTATO</h1>
    <div id="comp-k5cws23b">
        <form id="comp-kegqxf57" action="" method="post">
            <div><input type="text" name="nome" placeholder="Nome *" required></div>
            <div><input type="tel" name="phone" placeholder="Telefone"></div>
            <div><input type="email" name="email" placeholder="Email *" required></div>
            <div>  <!---  New div for the select element  --->
                <label for="servicos">Serviços:</label>
                <select name="servicos" id="servicos">
                    <option value="">--Selecione um serviço--</option>
                    <option value="corte">Corte</option>
                    <option value="barba">Barba</option>
                    <option value="corte_e_barba">Corte e Barba</option>
                    <option value="sobrancelha">Sobrancelha</option>
                    <!-- Add more options as needed -->
                </select>
            </div> <!--- close div --->
            <div><textarea name="mensagem" placeholder="Mensagem"></textarea></div>
            <div><button type="submit">ENVIAR</button></div>
            <?php echo $successMessage; ?>
        </form>
    </div>
</body>
</html>


    