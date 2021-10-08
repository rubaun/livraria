<?php

$cliente = busca_cliente($conexao, $_SESSION['cpf']);

?>


    <h3><br>
        Informações de <?php echo $cliente['nome_cliente']; ?>
    </h3>

<div class="row mb-2">
    <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-2">
        <h6>CPF:</h6>
        <p class="text-primary"><?php echo $cliente['cpf_cliente']; ?></p>
    </div>
    <div class="col-12 col-lg-3 col-md-12 col-sm-12 mb-2">
        <h6>Data de Nascimento:</h6>
        <p class="text-primary"><?php echo mostra_data_normal($cliente['data_nascimento']); ?></p>
    </div>
    <div class="col-12 col-lg-3 col-md-12 col-sm-12 mb-2">
        <h6>Sexo:</h6>
        <p class="text-primary"><?php echo $cliente['sexo']; ?></p>
    </div>
</div>
<div class="row mb-2">
    <div class="col-12 col-lg-3 col-md-12 col-sm-12 mb-2">
        <h6>E-mail:</h6>
        <p class="text-primary"><?php echo $cliente['email']; ?></p>
    </div>
    <div class="col-12 col-lg-3 col-md-12 col-sm-12 mb-2">
        <h6>Telefone:</h6>
        <p class="text-primary"><?php echo $cliente['telefone_cliente']; ?></p>
    </div>
</div>
<h4 class="mb-2">Endereço</h4>
<div class="col mb-2">
    <h6>Endereço:</h6>
    <p class="text-primary"><?php echo $cliente['end_cliente']; ?></p>
</div>
<div class="row mb-2">
    <div class="col-12 col-lg-2 col-md-12 col-sm-12 mb-2">
        <h6>Número:</h6>
        <p class="text-primary"><?php echo $cliente['end_numero']; ?></p>
    </div>
    <div class="col-12 col-lg-3 col-md-12 col-sm-12 mb-2">
        <h6>Bairro:</h6>
        <p class="text-primary"><?php echo $cliente['end_bairro']; ?></p>
    </div>
    <div class="col-12 col-lg-2 col-md-12 col-sm-12 mb-2">
        <h6>Cidade:</h6>
        <p class="text-primary"><?php echo $cliente['end_cidade']; ?></p>
    </div>
</div>
<div class="row mb-2">
    <div class="col-12 col-lg-2 col-md-12 col-sm-12 mb-2">
        <h6>Estado:</h6>
        <p class="text-primary"><?php echo mostra_estado($cliente['end_estado']); ?></p>
    </div>
    <div class="col-12 col-lg-2 col-md-12 col-sm-12 mb-2">
        <h6>CEP:</h6>
        <p class="text-primary"><?php echo $cliente['end_cep']; ?></p>
    </div>
</div>