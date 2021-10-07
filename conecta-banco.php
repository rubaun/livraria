<?php

$servidor = 'localhost';
$user = 'root';
$password = '123456';
$banco = 'livraria_tl';

$conexao = mysqli_connect($servidor,$user,$password,$banco) or
die('Não foi possível conectar: '.mysqli_error($conexao));

function verifica_login($conexao, $login){
    $sqlConfere = "SELECT email FROM cliente WHERE email = '{$login}'";
    $resultado = mysqli_query($conexao,$sqlConfere);

    return mysqli_fetch_assoc($resultado);

}

function verifica_senha($conexao, $senha, $login){
    $sqlConfere = "SELECT senha FROM cliente WHERE email = '{$login}' AND senha = '{$senha}'";
    $resultado = mysqli_query($conexao,$sqlConfere);

    return mysqli_fetch_assoc($resultado);
}

?>