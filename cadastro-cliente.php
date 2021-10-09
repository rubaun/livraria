<?php

include 'conecta-banco.php';
include 'ferramentas.php';

$cadastro_realizado = false;
$tem_erro = false;
$erros_cadastro = [];

if(array_key_exists('cpf',$_POST) && $_POST['cpf'] !== ''){
    $senha = md5($_POST['senha']);

    $emailVerificado = verifica_login($conexao,$_POST['email']);

    if($emailVerificado){
       $tem_erro = true;
       $erros_cadastro['email'] = 'Este e-mail já está cadastrado';
    }

    $cpfVerificado = verifica_cpf($conexao,$_POST['cpf']);

    if($cpfVerificado){
        $tem_erro = true;
        $erros_cadastro['cpf'] = 'Este CPF já está cadastrado';
    }

    $senhaVerificada = verifica_senha_cadastro($_POST['senha'],$_POST['senha2']);

    if(!$senhaVerificada){
        $tem_erro = true;
        $erros_cadastro['senha'] = 'As senhas devem ser iguais';
    }

    if(!$emailVerificado && !$cpfVerificado && $senhaVerificada){
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
            $cadastro_realizado = true;
        }
    }
}

$cadastro = [
    'nome'=> $_POST['nome'] ?? '',
    'cpf'=> $_POST['cpf'] ?? '',
    'nascimento'=> $_POST['nascimento'] ?? '',
    'sexo'=> $_POST['sexo'] ?? '',
    'email'=> $_POST['email'] ?? '',
    'telefone'=> $_POST['telefone'] ?? '',
    'endereco'=> $_POST['endereco'] ?? '',
    'end_numero'=> $_POST['end_numero'] ?? '',
    'bairro'=> $_POST['bairro'] ?? '',
    'cidade'=> $_POST['cidade'] ?? '',
    'estado'=> $_POST['estado'] ?? '',
    'cep'=> $_POST['cep'] ?? '',
    'senha'=> $_POST['senha'] ?? '',
    'senha2' => $_POST['senha2'] ?? '',
];

?>