<!DOCTYPE html>
<html>
<?php
include 'cabecalho.php';
?>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top p-3">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Área do Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?cliente=1">Meus Dados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contato">Contato</a>
          </li>
        </ul>
        <form class="d-flex" action="dashboard.php" method="post">
          <button class="btn btn-danger btn-lg" type="submit" name="sair">Sair</button>
        </form>
      </div>
    </div>
  </nav>
  <main class="container-fluid">
    <section class="row mx-5 mt-3 p-3 mb-3 bg-white rounded">
      <?php
        echo 'Você está logado como: '.$_SESSION['usuario'];
        if(array_key_exists('cliente',$_GET) && $_GET['cliente'] !=''){
            include 'cliente.php';
        }
      ?>
    </section>
  </main>
  <?php
    include 'footer.php';
  ?>
  <div class="bg-warning text-center p-1">
    <h6 class="small">Livraria Traça Livros&copy; 2021 | Prof&deg; Ruben Prado</h6>
  </div>
  <script src="js/valida-form.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>