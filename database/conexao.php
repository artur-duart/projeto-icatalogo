<?php

/*
PARÂMETROS DE CONEXÃO MYSQL I

1 - host -> Onde o Banco de Dados está rodando 
2 - user -> Usuário do Banco de Dados
3 - password -> Senha do usuário do Banco de Dados
4 - database -> Nome do Banco de Dados
*/

const HOST = 'localhost';
const USER = 'root';
const PASSWORD = 'bcd127';
const DATABASE = 'icatalogo';

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if ($conexao === false) {
    die(mysqli_connect_error());
}

// echo '<pre>';
// var_dump($conexao);
// echo '</pre>';
