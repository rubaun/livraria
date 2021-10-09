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
    <section id="quemsomos" class="row justify-content-center text-center text-light">
      <h2 class="display-3 pt-4">
        Ler cura doenças intelectuais.
      </h2>
      <small><em>Obedes Lobadias</em></small>
      <div class="mt-5 bg-dark rounded col-8 align-self-center flex">
        <h4 class="p-5">
          A livraria Traça Livros tem mais de 20 anos de tradição em vender grandes clássicos
          da literatura, oferecer o <em>Clube da Traça</em> proporcionando momentos agradáveis
          de boa companhia e leitura prazerosa.
        </h4>
      </div>
      <div>
        <br id="clubetraca">
        <a href="cadastro-clube.php" class="btn btn-warning btn-lg m-5">Conheça o Clube da Traça</a>
      </div>
    </section>
    <section class="row justify-content-center text-center mb-5">
      <h2 class="display-3 pt-4 text-light">Esse Mês no Clube da Traça</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="img/livro_pai_rico_pai_pobre.jpg" class="card-img-top" width="500"
              alt="Capa livro Pai Rico Pai Pobre">
            <div class="card-body">
              <h5 class="card-title">Pai Rico Pai Pobre</h5>
              <p class="card-text">A escola prepara as crianças para o mundo real? Essa é a primeira pergunta com a qual
                o leitor se depara neste livro. O recado é ousado e direto: boa formação e notas altas não bastam para assegurar o
                sucesso de alguém. O mundo mudou; a maioria dos jovens tem cartão de crédito, antes mesmo de concluir os estudos, e
                nunca teve aula sobre dinheiro, investimentos, juros etc.
              </p>
               </div>
               <a href="cadastro-clube.php" class="btn btn-warning">Receber</a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/livro_a_garota_do_lago.jpg" class="card-img-top" width="500" alt="Capa A Garota do Lago">
            <div class="card-body">
              <h5 class="card-title">A Garota do Lago</h5>
              <p class="card-text">Em “A garota do lago” conhecemos a história de uma jovem estudante de direito violentada e
                assassinada de forma brutal. A jornalista Kelsey Castle é enviada para a pequena cidade onde o crime aconteceu
                para investigar enquanto luta para se recuperar de um trauma pessoal.
              </p>
             </div>
             <a href="cadastro-clube.html" class="btn btn-warning">Receber</a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/livro_a_revolucao_dos_bichos.jpg" class="card-img-top" width="500"
              alt="Capa do livro A Revoluçã dos Bichos">
            <div class="card-body">
              <h5 class="card-title">A Revolução dos Bichos</h5>
              <p class="card-text">A clássica obra do autor inglês George Orwell narra a jornada de um grupo de animais que
                decide se rebelar contra o dono da fazendo, o Sr. Jones, e com a exploração dos humanos. É uma alegoria e uma
                sátira sobre o totalitarismo, mais especificamente com os rumos tomados pela Revolução Russa, de 1917
              </p>
              </div>
              <a href="cadastro-clube.html" class="btn btn-warning">Receber</a>
          </div>
        </div>
      </div>
    </section>
    <section id="contato" class="row justify-content-center bg-light">
      <h2 class="display-3 mt-4 text-center bg-warning text-white">Contato</h2>
      <div class="row row-cols-1 row-cols-md-2" id="contato">
        <div class="col-lg-4 float-start">
            <img src="img/garota_livros.png" class="img-fluid"> 
        </div>
        <div class="col-lg-8 float-end">
            <form>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input class="form-control" type="text" placeholder="Digite seu nome" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Telefone</label>
                    <input class="form-control" type="tel" placeholder="Telefone com DDD" id="tel" name="tel" required>
                </div>
                <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input class="form-control" type="text" placeholder="Digite seu Email" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-warning btn-lg mb-5" style type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    </section>
  </main>
    <!--Botão do Zap -->
      <a href="#">
        <img src="img/botao_zap.png" width="80" style="display: block; position: fixed; bottom: 10px; right: 10px;">
      </a>
    <!--Botão do Zap-->
  <?php
    include 'footer.php';
  ?>
  <div class="bg-warning text-center p-1">
    <h6 class="small">Livraria Traça Livros&copy; 2021 | Prof&deg; Ruben Prado</h6>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
</body>

</html>