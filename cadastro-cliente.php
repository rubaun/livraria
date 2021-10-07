<?php

include 'conecta-banco.php';

$senha = md5($_POST['senha']);

$sqlInserir = "INSERT INTO cliente 
(nome_cliente,cpf_cliente,data_nascimento,sexo,email,telefone_cliente,end_cliente,
end_numero,end_bairro,end_cidade,end_estado,end_cep,senha) VALUES (";
$sqlInserir .= "'{$_POST['nome']}',";
$sqlInserir .= "'{$_POST['cpf']}',";
$sqlInserir .= "'{$_POST['nascimento']}',";
$sqlInserir .= "'{$_POST['sexo']}',";
$sqlInserir .= "'{$_POST['email']}',";
$sqlInserir .= "'{$_POST['telefone']}',";
$sqlInserir .= "'{$_POST['endereco']}',";
$sqlInserir .= "'{$_POST['end_numero']}',";
$sqlInserir .= "'{$_POST['bairro']}',";
$sqlInserir .= "'{$_POST['cidade']}',";
$sqlInserir .= "'{$_POST['estado']}',";
$sqlInserir .= "'{$_POST['cep']}',";
$sqlInserir .= "'{$senha}')";

$resultado = mysqli_query($conexao,$sqlInserir);

if(!$resultado){
    die('Erro: '.mysqli_error($conexao));
}else{
    echo 'Seu cadastro foi feito com sucesso!';
}


?>