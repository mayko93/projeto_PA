<?php
//VERIFICAR SE O USUÁRIO ESTÁ LOGADO
include_once("logado.php");

// 2. CONECTAR AO BANCO DE DADOS
include_once("conexao.php");

// 3. CRIAR SCRIPT SQL
$sql = "SELECT * FROM tarefa";

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
    <title>Página do Cliente</title>
    <link rel="shortcut icon" href="imagens/iconepag.ico">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Página inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Trocar de usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tarefa.php">Nova tarefa</a>
                        </li>

                        <?php
                        /*
                        if (isset($_GET["SAIR"])) {
                            session_abort();
                            header("Location: index.php");
                        }*/

                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?SAIR=true">Sair</a>
                        </li>
                    </ul>

                </div>
        </nav>
    </div>

    <div class="col-md-8 " style="margin: 1% ;">
        <div class="d-flex justify-content-center"><br />
            <h3>Minhas Tarefas</h3>
        </div>
        <table class="table table-striped table-hover border-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID da Tarefa</th>
                    <th scope="col">Tarefa</th>
                    <th scope="col">Quando será realizada</th>
                    <th scope="col" colspan="2" class="d-flex justify-content-center">Açoes</th>
                </tr>
            </thead>

            <?php

            do {

            ?>

                <tbody>
                    <tr>
                        <th scope="row"><?php echo $arResultado['id_tarefa'];  ?></th>
                        <td><?php echo $arResultado['tipo'];  ?></td>
                        <td><?php echo $arResultado['dataHora'];  ?></td>
                        <td>
                            <a href="editar.php">Editar</a>
                        </td>
                        <td>
                            <a href="excluir.php?a=<?php echo $arResultado['id_tarefa'] ?>">Excluir</a>
                        </td>
                    </tr>
                </tbody>

            <?php
            } while ($arResultado = mysqli_fetch_assoc($resultado));
            ?>
        </table>

    </div>

</body>

</html>