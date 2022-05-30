<?php


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imagens/iconepag.ico">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <style>
    .plano_fundo {
      width: 100%;
      height: 100%;
    }
  </style>

  <title>Pequenos Afazeres</title>
</head>

<body>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>

        <a class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 btn btn-outline-light" href="login.php">Solicitar uma tarefa</a>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Pesquisar..." aria-label="Search">
        </form>

        <div class="text-end">
          <a class="btn btn-outline-light me-2" href="login.php">Entrar</a>
          <a class="btn btn-warning" href="cadastrar.php">Cadastrar-se</a>
        </div>
      </div>
    </div>
  </header>

  <img src="imagens/logomarca.png" class="plano_fundo">

</body>

</html>