<?php

session_start();

require_once('../../database/conexao.php');

function realizarLogin($usuario, $senha, $conexao)
{

    $sql = "SELECT * FROM tbl_administrador
            WHERE usuario = '$usuario' AND senha = '$senha'";

    $resultado = mysqli_query($conexao, $sql);

    $dadosUsuario = mysqli_fetch_array($resultado);

    if (isset($dadosUsuario['usuario']) && isset($dadosUsuario['senha']) && password_verify($senha, $dadosUsuario["senha"])) {

        $_SESSION["usuarioId"] = $dadosUsuario["id"];
        $_SESSION["nome"] = $dadosUsuario["nome"];

        // echo $_SESSION["usuarioId"];
        // echo $_SESSION["nome"];

        header("location: ../../produtos/index.php");

        //Armazenar variáveis de sessão e redirecionar para o index
    } else {
        session_destroy();
        header("location: ../../produtos/index.php");
    }
}

switch ($_POST["acao"]) {
    case 'login':
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        realizarLogin($usuario, $senha, $conexao);

        // var_dump($_POST);
        break;

    case 'logout':
        session_destroy();
        header("location: ../../produtos/index.php");

    default:
        # code...
        break;
}
