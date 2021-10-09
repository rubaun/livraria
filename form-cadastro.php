<form action="#" method="post">
                        <div class="col m-4">
                            <p class="text-center">Cadastre-se no clube da traça e todo mês você receberá, em sua casa, 
                                um exemplar à sua escolha e juntamente com seu grupo de leitura desfrutar de muitas
                                trocas de experiências e conhecimentos.
                            </p>
                        </div>
                        <h4 class="mb-3">Dados Pessoais</h4>
                        <div class="col mb-3">
                            <label for="nome" class="form-label">Nome Completo:</label>
                            <input type="text" class="form-control" id="nome" name="nome" 
                            value="<?php echo $cadastro['nome']; ?>" placeholder="Digite o nome completo" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 mb-3">
                                <label for="cpf" class="form-label">CPF:</label>
                                <?php if($tem_erro && array_key_exists('cpf',$erros_cadastro)) : ?>
                                    <span class="text-danger"><?php echo $erros_cadastro['cpf']; ?></span>
                                <?php endif; ?>
                                <input type="text" class="form-control" id="cpf" name="cpf" 
                                value="<?php echo $cadastro['cpf']; ?>" maxlength="11" placeholder="Somente números" required> 
                            </div>
                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 mb-3">
                                <label for="nascimento" class="form-label">Data de Nascimento:</label>
                                <input type="date" class="form-control" id="nascimento" name="nascimento" 
                                value="<?php echo $cadastro['nascimento']; ?>" required>
                            </div>
                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 mb-3">
                                <label for="sexo" class="form-label">Sexo:</label>
                                <select class="form-select" id="sexo" name="sexo" required>
                                    <option value="0" <?php echo ($cadastro['sexo'] == '') ? 'selected' : '' ; ?>>Selecione uma opção</option>
                                    <option value="Masculino" <?php echo ($cadastro['sexo'] == 'Masculino') ? 'selected' : '' ; ?>>Masculino</option>
                                    <option value="Feminino" <?php echo ($cadastro['sexo'] == 'Feminino') ? 'selected' : '' ; ?>>Feminino</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <?php if($tem_erro && array_key_exists('email',$erros_cadastro)) : ?>
                                    <span class="text-danger"><?php echo $erros_cadastro['email']; ?></span>
                                <?php endif; ?>
                                <input type="email" class="form-control" id="email" name="email" 
                                value="<?php echo $cadastro['email']; ?>" placeholder="nome@dominio.com" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="telefone" class="form-label">Telefone:</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" 
                                value="<?php echo $cadastro['telefone']; ?>" maxlength="11" placeholder="Somente numeros mais o DDD" required>
                            </div>
                        </div>
                        <h4 class="mb-3">Endereço</h4>
                        <div class="col mb-3">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" 
                            value="<?php echo $cadastro['endereco']; ?>" placeholder="Digite o endereço" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-4 col-sm-12 mb-3">
                                <label for="end_numero" class="form-label">Número:</label>
                                <input type="text" class="form-control" id="end_numero" name="end_numero" 
                                value="<?php echo $cadastro['end_numero']; ?>" placeholder="Número da Residência" required>
                            </div>
                            <div class="col-lg-4 col-sm-12 mb-3">
                                <label for="bairro" class="form-label">Bairro:</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" 
                                value="<?php echo $cadastro['bairro']; ?>" placeholder="Bairro" required>
                            </div>
                            <div class="col-lg-4 col-sm-12 mb-3">
                                <label for="cidade" class="form-label">Cidade:</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" 
                                value="<?php echo $cadastro['cidade']; ?>" placeholder="Cidade" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="estado" class="form-label">Estado:</label>
                                <select class="form-select" id="estado" name="estado">
                                    <option <?php echo ($cadastro['estado'] == '') ? 'selected' : '' ; ?>>Selecione uma opção</option>
                                    <option value="AC" <?php echo ($cadastro['estado'] == 'AC') ? 'selected' : '' ; ?>>Acre</option>
                                    <option value="AL" <?php echo ($cadastro['estado'] == 'AL') ? 'selected' : '' ; ?>>Alagoas</option>
                                    <option value="AP" <?php echo ($cadastro['estado'] == 'AP') ? 'selected' : '' ; ?>>Amapá</option>
                                    <option value="AM" <?php echo ($cadastro['estado'] == 'AM') ? 'selected' : '' ; ?>>Amazonas</option>
                                    <option value="BA" <?php echo ($cadastro['estado'] == 'BA') ? 'selected' : '' ; ?>>Bahia</option>
                                    <option value="CE" <?php echo ($cadastro['estado'] == 'CE') ? 'selected' : '' ; ?>>Ceará</option>
                                    <option value="DF" <?php echo ($cadastro['estado'] == 'DF') ? 'selected' : '' ; ?>>Distrito Federal</option>
                                    <option value="ES" <?php echo ($cadastro['estado'] == 'ES') ? 'selected' : '' ; ?>>Espírito Santo</option>
                                    <option value="GO" <?php echo ($cadastro['estado'] == 'GO') ? 'selected' : '' ; ?>>Goiás</option>
                                    <option value="MA" <?php echo ($cadastro['estado'] == 'MA') ? 'selected' : '' ; ?>>Maranhão</option>
                                    <option value="MT" <?php echo ($cadastro['estado'] == 'MT') ? 'selected' : '' ; ?>>Mato Grosso</option>
                                    <option value="MS" <?php echo ($cadastro['estado'] == 'MS') ? 'selected' : '' ; ?>>Mato Grosso do Sul</option>
                                    <option value="MG" <?php echo ($cadastro['estado'] == 'MG') ? 'selected' : '' ; ?>>Minas Gerais</option>
                                    <option value="PA" <?php echo ($cadastro['estado'] == 'PA') ? 'selected' : '' ; ?>>Pará</option>
                                    <option value="PB" <?php echo ($cadastro['estado'] == 'PB') ? 'selected' : '' ; ?>>Paraíba</option>
                                    <option value="PR" <?php echo ($cadastro['estado'] == 'PR') ? 'selected' : '' ; ?>>Paraná</option>
                                    <option value="PE" <?php echo ($cadastro['estado'] == 'PE') ? 'selected' : '' ; ?>>Pernambuco</option>
                                    <option value="PI" <?php echo ($cadastro['estado'] == 'PI') ? 'selected' : '' ; ?>>Piauí</option>
                                    <option value="RJ" <?php echo ($cadastro['estado'] == 'RJ') ? 'selected' : '' ; ?>>Rio de Janeiro</option>
                                    <option value="RN" <?php echo ($cadastro['estado'] == 'RN') ? 'selected' : '' ; ?>>Rio Grande do Norte</option>
                                    <option value="RS" <?php echo ($cadastro['estado'] == 'RS') ? 'selected' : '' ; ?>>Rio Grande do Sul</option>
                                    <option value="RO" <?php echo ($cadastro['estado'] == 'RO') ? 'selected' : '' ; ?>>Rondônia</option>
                                    <option value="RR" <?php echo ($cadastro['estado'] == 'RR') ? 'selected' : '' ; ?>>Roraima</option>
                                    <option value="SC" <?php echo ($cadastro['estado'] == 'SC') ? 'selected' : '' ; ?>>Santa Catarina</option>
                                    <option value="SP" <?php echo ($cadastro['estado'] == 'SP') ? 'selected' : '' ; ?>>São Paulo</option>
                                    <option value="SE" <?php echo ($cadastro['estado'] == 'SE') ? 'selected' : '' ; ?>>Sergipe</option>
                                    <option value="TO" <?php echo ($cadastro['estado'] == 'TO') ? 'selected' : '' ; ?>>Tocantins</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="cep" class="form-label">CEP:</label>
                                <input type="text" class="form-control" id="cep" name="cep" maxlength="8" 
                                value="<?php echo $cadastro['cep']; ?>" placeholder="Somente números" required>
                            </div>
                        </div>
                        <h4 class="mb-3">
                            Senha de Acesso - 
                            <small>
                                <input type="checkbox" id="versenha" class="form-check-input"> ver senha
                            </small>
                        </h4>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="senha1" class="form-label">Senha:</label>
                                <input type="password" class="form-control" id="senha1" 
                                value="<?php echo $cadastro['senha']; ?>" name="senha" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="senha2" class="form-label">Confirme a senha:</label>
                                <?php if($tem_erro && array_key_exists('senha',$erros_cadastro)) : ?>
                                    <span class="text-danger"><?php echo $erros_cadastro['senha']; ?></span>
                                <?php endif; ?>
                                <input type="password" class="form-control" id="senha2"
                                value="<?php echo $cadastro['senha2']; ?>" name="senha2" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-sm-12 mb-3">
                                <input type="submit" value="Cadastrar" id="enviar" class="btn btn-primary btn-lg">
                            </div>
                            <div class="col-lg-10 col-sm-12 mb-3 form-check">
                                <input type="checkbox" name="termos" id="termos" class="form-check-input" required>
                                <label for="termos" class="form-check-label">
                                   <a href="termo-privacidade.html" target="_blank">Termos de Privacidade</a> | 
                                   <a href="termo-de-uso.html" target="_blank">Termos de Uso</a>
                                </label>
                            </div>
                        </div>
                    </form>