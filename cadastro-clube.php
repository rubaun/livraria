<!DOCTYPE html>
<html>
  <?php
  include 'cabecalho.php';
  ?>
  
  <body>
    <?php
      include 'header.php';
      include 'nav.php';
    ?>
            <main class="container-fluid">
                <section class="row mx-5 mt-3 p-3 mb-3 bg-white rounded">
                    <form action="cadastro-cliente.php" method="post">
                        <div class="col m-4">
                            <p class="text-center">Cadastre-se no clube da traça e todo mês você receberá, em sua casa, 
                                um exemplar à sua escolha e juntamente com seu grupo de leitura desfrutar de muitas
                                trocas de experiências e conhecimentos.
                            </p>
                        </div>
                        <h4 class="mb-3">Dados Pessoais</h4>
                        <div class="col mb-3">
                            <label for="nome" class="form-label">Nome Completo:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome completo" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 mb-3">
                                <label for="cpf" class="form-label">CPF:</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" placeholder="Somente números" required> 
                            </div>
                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 mb-3">
                                <label for="nascimento" class="form-label">Data de Nascimento:</label>
                                <input type="date" class="form-control" id="nascimento" name="nascimento" required>
                            </div>
                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 mb-3">
                                <label for="sexo" class="form-label">Sexo:</label>
                                <select class="form-select" id="sexo" name="sexo" required>
                                    <option value="0" selected>Selecione uma opção</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="nome@dominio.com" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="telefone" class="form-label">Telefone:</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" maxlength="11" placeholder="Somente numeros mais o DDD" required>
                            </div>
                        </div>
                        <h4 class="mb-3">Endereço</h4>
                        <div class="col mb-3">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-4 col-sm-12 mb-3">
                                <label for="end_numero" class="form-label">Número:</label>
                                <input type="text" class="form-control" id="end_numero" name="end_numero" placeholder="Número da Residência" required>
                            </div>
                            <div class="col-lg-4 col-sm-12 mb-3">
                                <label for="bairro" class="form-label">Bairro:</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required>
                            </div>
                            <div class="col-lg-4 col-sm-12 mb-3">
                                <label for="cidade" class="form-label">Cidade:</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="estado" class="form-label">Estado:</label>
                                <select class="form-select" id="estado" name="estado" required>
                                    <option selected>Selecione uma opção</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="cep" class="form-label">CEP:</label>
                                <input type="text" class="form-control" id="cep" name="cep" maxlength="8" placeholder="Somente números" required>
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
                                <input type="password" class="form-control" id="senha1" name="senha" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="senha2" class="form-label">Confirme a senha:</label>
                                <input type="password" class="form-control" id="senha2" required>
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
                </section>
            </main>
            <footer class="container-fluid">
                <div class="row text-white bg-dark pt-5 pb-5 m-auto">
                  <div class="col-lg-4 col-sm-12">
                    <h4>Livraria Traça Livros</h4>
                    <small><em>A sua melhor companhia</em></small>
                    <ul class="list-group list-group-flush text-dark">
                      <li class="list-group-item"><a href="#" class="text-decoration-none">Quem Somos</a></li>
                      <li class="list-group-item"><a href="#" class="text-decoration-none">Clube da Traça</a></li>
                      <li class="list-group-item"><a href="#" class="text-decoration-none">Cadastre-se</a></li>
                      <li class="list-group-item"><a href="#" class="text-decoration-none">Contato</a></li>
                      <li class="list-group-item"><a href="#" class="text-decoration-none">Login</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <p class="pt-5" style="text-align: justify;">A livraria Traça Livros está sempre de portas 
                      abertas te receber. Faça parte do clube 
                      de leitura. O clube proporciona uma ótima oportunidade mensal de receber novos Livros
                      e ser estimulado por um grupo ávido de leitores iniciantes ou veteranos.
                    </p>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                    <p class="pt-5" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi aliquid recusandae dolore quas qui
                      voluptatibus esse libero quasi commodi quisquam laborum quidem sit illo, necessitatibus possimus quam quaerat animi?
                    </p>
                  </div>
                </div>
              </footer>
              <div class="bg-warning text-center p-1">
                <h6 class="small">Livraria Traça Livros&copy; 2021 | Prof&deg; Ruben Prado</h6>
              </div>
        <script src="js/valida-form.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>