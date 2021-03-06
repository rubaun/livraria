<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Livraria Traça Livros</title>
    </head>
    <body>
        <header class="container-fluid">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/livraria_banner_1920x600.jpg" class="d-block w-100" alt="Mãos com livro aberto">
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="escrita-mao mb-5" style="font-size: 8em;">Livraria Traça Livros</h1>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top p-3">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#quemsomos">Quem Somos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#clubetraca">Clube da Traça</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contato">Contato</a>
                  </li>
                </ul>
                <form class="d-flex" action="acesso-clube.html">
                  <button class="btn btn-outline-dark" type="submit">Acesso Clube</button>
                </form>
              </div>
            </div>
          </nav>
            <main class="container-fluid">
                <section class="row mx-5 mt-3 p-3 mb-3 bg-white rounded">
                    <form action="#" method="get">
                        <div class="col m-4">
                            <p class="text-center">Cadastre o código ISBN do Livro e a Quantidade no Estoque</p>
                        </div>
                        <h4 class="mb-3">Cadastro do Livro</h4>
                        <div class="row mb-3">
                            <div class="col-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="cpf" class="form-label">ISBN:</label>
                                <input type="text" class="form-control" id="isbn" name="isbn" maxlength="13" placeholder="Somente números" required> 
                            </div>
                            <div class="col-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                <label for="nascimento" class="form-label">Quantidade:</label>
                                <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                            </div>
                         </div>
                        
                        <div class="row">
                            <div class="col-lg-2 col-sm-12 mb-3">
                                <input type="submit" value="Cadastrar" id="enviar" class="btn btn-primary btn-lg">
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