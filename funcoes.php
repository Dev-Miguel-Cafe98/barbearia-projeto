<?php
require 'conecta.php';

function executarQuery($conexao, $sql)
{
    $consulta = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return $consulta;
}


//Funcao para inserir novos usuários

function inserirUsuario($conexao, $nome, $telefone, $email, $servicos, $mensagem)
{

    // Montando o comando SQL para fazer o INSERT dos dados 

    $sql = "INSERT INTO clientes (nome, email, telefone, servicos, mensagem)
    VALUES('$nome','$email','$telefone','$servicos','$mensagem')";

    // Executando o comando no banco Via PHP

    executarQuery($conexao, $sql);
}