<?php
//1. VERIFICAR SE O USUÁRIO ESTÁ LOGADO
include_once("logado.php");
//1.1 RECUPERA E TRÁS O ID SELECIONADO
$id = $_GET['a'];

// 2. CONECTAR AO BANCO DE DADOS
include_once("conexao.php");

// 3. CRIAR SCRIPT SQL
$sql = "SELECT * FROM tarefa";
$sql .= " WHERE id_tarefa = " . $id;

// 4. EXECUTAR SCRIPT SQL
$resultado = mysqli_query($conexao, $sql);

// 5. TRATAR DADOS RECUPERADOS DO BANCO DE DADOS
$arResultado = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excluir Tarefa</title>
  <link rel="shortcut icon" href="imagens/iconepag.ico">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
  <div style="margin: 1%;" class="col-md-8">
    <div>
      <h3>Excluir Tarefa</h3>
    </div>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
        <use xlink:href="#exclamation-triangle-fill" />
      </svg>
      <div>
        <h4>Deseja Realmente excluir esta tarefa?</h4>
      </div>
    </div>

    <div>
      <form action="cExcluir.php" method="POST">
        <div class="col-md-6">

          <label class="form-label fs-5 ">ID: <?php echo $arResultado['id_tarefa']; ?> </label>
          <input type="hidden" class="form-control " name="id" id="id" value="<?php echo $arResultado['id_tarefa']; ?>"><br />

          <label class="form-label fs-5 " >Tarefa: <?php echo $arResultado['tipo']; ?></label>
          <input type="hidden" class="form-control " name="tarefa" id="tarefa" value="<?php echo $arResultado['tipo']; ?>"><br/>

          <label class="form-label fs-5 " >Data da tarefa: <?php echo $arResultado['dataHora']; ?></label>
          <input type="hidden" class="form-control " name="data" id="data" value="<?php echo $arResultado['dataHora']; ?>">

        </div><br>

        <div class="col-12">
          <button class="btn btn-primary" type="submit">Sim, excluir</button>
          <button class="btn btn-primary" type="reset">Cancelar<a href="homeCliente.php"></a></button>
        </div>
      </form>
    </div>
  </div>



</body>

</html>