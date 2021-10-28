<?php

require_once('../../database/conexao.php');

function realizarLogin($usuario, $senha, $conexao)
{

    $sql = "SELECT * FROM tbl_administrador
            WHERE usuario = '$usuario' AND senha = '$senha'";

    $resultado = mysqli_query($conexao, $sql);

    $dadosUsuario = mysqli_fetch_array($resultado);

    if (isset($dadosUsuario['usuario']) || isset($dadosUsuario['senha'])) {

        echo 'Login feito com sucesso!';
        //Armazenar variáveis de sessão e redirecionar para o index
    } else {
        echo 'Falha no login!';
        //session_destroy() e manda para o index novamente
    }
}

realizarLogin('admin', 'admin', $conexao);

