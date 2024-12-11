<?php
require 'conecta.php';

function executarQuery($conexao, $sql)
{
    $consulta = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return $consulta;
}


//Funcao para inserir novos usuários

function inserirUsuario($conexao, $nome, $email, $senha)
{

    // Montando o comando SQL para fazer o INSERT dos dados 

    $sql = "INSERT INTO clientes (nome, email, senha)
    VALUES('$nome','$email','$senha')";

    // Executando o comando no banco Via PHP

    executarQuery($conexao, $sql);
}