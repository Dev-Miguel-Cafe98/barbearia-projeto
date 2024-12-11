<?php
if (!isset($_SESSION)) {
    // Se não tiver, entao iniciamos uma sessão
    session_start();
}


function verificarAcesso()
{
    /*Se NAO EXISTIR uma variavel de sessao chamada "id",
    entao significa que o usuário não está logado. */
    if (!isset($_SESSION['id'])) {
        //Portanto, destruimos qualquer resquicio de sessão
        session_destroy();
        //Fazemos o usuário ir pra a pagina de login.php
        header("location:login.php?acesso_negado");
        //E paramos completamente a execuçao do script
        die();
    }
}

/*Funçao que sera usada pelo formulário login.php */

function login($id, $nome)
{
    //Criar variaveis de sessao
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    
}