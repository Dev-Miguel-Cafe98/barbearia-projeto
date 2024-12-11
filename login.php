<?php
// processar_cadastro.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details (replace with your actual credentials)
    $hostname = "your_hostname"; // e.g., localhost
    $username = "your_username"; // e.g., root
    $password = "your_password"; 
    $database = "your_database";  

    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar-senha"];

    // Basic validation (you'll want to add more robust checks)
    if ($senha !== $confirmar_senha) {
        echo "Senhas não coincidem.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email inválido.";
    } else {
        // Hash the password (VERY IMPORTANT!)
        $hashed_senha = password_hash($senha, PASSWORD_DEFAULT);

        // Insert user data into the database
        $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$hashed_senha')";

        if ($conn->query($sql) === TRUE) {
          echo "Cadastro realizado com sucesso!";

           // Redirect to a success page or login page 
          header("Location: index.html"); // Replace with your desired location
          exit();

        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }
    }

    $conn->close();
}
?>
