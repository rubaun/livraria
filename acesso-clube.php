<?php

    include 'conecta-banco.php';

    session_start();

    //Se o usuário já estiver logado e vai direto para o painel do cliente
    if(isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == true){
      header('Location: dashboard.php');
      die();
    }

    $tem_erro = false;
    $erros_login = [];

    if(array_key_exists('login',$_POST) && $_POST['login'] != ''){
        
        $login = verifica_login($conexao,$_POST['login']);

        if(!$login){
            $tem_erro = true;
            $erros_login['login'] = 'Usuário Inválido ou Não Cadastrado';
        }
        
        $senha = verifica_senha($conexao,md5($_POST['senha']),$_POST['login']);

        if(!$senha){
            $tem_erro = true;
            $erros_login['senha'] = 'Senha Incorreta';
        }

        if($login && $senha){
            $_SESSION['usuario'] = $_POST['login'];
            $_SESSION['autenticado'] = true;
            $_SESSION['cpf'] = $senha['cpf_cliente'];
            header('Location:dashboard.php');
            die();
        }
    }

    $login = [
        'login' => $_POST['login'] ?? '',
        'senha' => $_POST['senha'] ?? '',
    ];

?>

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
                    <form method="post">
                        <div class="col mb-3">
                            <label for="nome" class="form-label">Login:</label>
                            <?php if($tem_erro && array_key_exists('login',$erros_login)) : ?>
                                <span class="text-danger"><?php echo $erros_login['login']; ?></span>
                            <?php endif; ?>
                            <input type="text" class="form-control" id="login" name="login" placeholder="nome@dominio.com" 
                            value="<?php echo $login['login']?>" required>
                        </div>
                        <div class="col mb-3">
                            <label for="nome" class="form-label">Senha:</label>
                            <?php if($tem_erro && $erros_login['senha'] != 0) : ?>
                                <span class="text-danger"><?php echo $erros_login['senha']; ?></span>
                            <?php endif; ?>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="senha" 
                            value="<?php echo $login['senha']?>" required>
                        </div>
                        <div class="col mb-3">
                            <input type="submit" class="btn btn-primary form-control" value="Entrar" required>
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