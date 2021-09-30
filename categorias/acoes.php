<?php

/*CONEXÃO COM O BANCO DE DADOS*/
require("../database/conexao.php");

/*TRATAMENTO DOS DADOS VINDO DO FORMULÁRIO

- TIPOS DE AÇÃO
- EXECUCÃO DOS PROCESSOS DA AÇÃO SOLICITAR
*/

switch ($_POST["acao"]) {
    case 'inserir':
        // echo 'INSERIR';
        $descricao = $_POST["descricao"];

        /* MONTAGEM DA INSTRUÇÃO SQL DE INSERÇÃO */
        $sql = "INSERT INTO tbl_categoria (descricao) VALUES ('$descricao')";

        // echo $sql;exit;

        /*
        mysql_query parametros:
        1 - Uma conexão aberta e válida
        2 - Uma instrução sql válida 
        */
        $resultado = mysqli_query($conexao, $sql);

        header('location: index.php');

        // echo '<pre>';
        // var_dump($resultado);
        // echo '</pre>';
        // exit;

        break;

    default:
        # code...
        break;
}
