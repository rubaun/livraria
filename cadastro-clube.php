<!DOCTYPE html>
<html>
  <?php
  include 'cadastro-cliente.php';
  include 'cabecalho.php';
  ?>
  
  <body>
    <?php
      include 'header.php';
      include 'nav.php';
    ?>
            <main class="container-fluid">
                <section class="row mx-5 mt-3 p-3 mb-3 bg-white rounded">
                    <?php 
                    if($cadastro_realizado){
                        echo '<h2>Seu cadastro foi realizado com sucesso.</h2>';
                    }else{
                        include 'form-cadastro.php';
                    }
                    ?>
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