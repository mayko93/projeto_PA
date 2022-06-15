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
    <title>Tarefas</title>
    <link rel="shortcut icon" href="imagens/iconepag.ico">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="col-md-6" style="margin: 1%; ">
        <h2 class="d-flex justify-content-center">Editar Tarefa</h2>
        <form action="cEditar.php" method="POST">
            <div class="form-check">
            <label style="font-size: 20px ; font-weight:bold ;" class="form-label">ID: <?php echo $arResultado['id_tarefa']; ?></label>
            <input type="hidden" name="id" value=" <?php echo $arResultado['id_tarefa']; ?> ">
                
            <label style="font-size: 20px ; font-weight:bold ;" class="form-label">Selecione o tipo de tarefa desejada:</label><br><br>
                <input class="form-check-input" type="radio" name="tarefa" id="entregar" value="Entregar">
                <label class="form-check-label">
                    Entregar
                </label>
            </div><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tarefa" id="Comprar" value="Buscar">
                <label class="form-check-label">
                    Buscar
                </label>
            </div><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tarefa" id="Comprar" value="Comprar">
                <label class="form-check-label">
                    Comprar
                </label>
            </div><br><br>
            <div>
                <label style="font-size: 20px ; font-weight:bold ;" class="form-label">Endereço:</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereço de onde deseja que seja feita a tarefa" required>
            </div><br>
            <div>
                <label style="font-size: 20px ; font-weight:bold ;" class="form-label">Informe quando deseja que seja feita a tarefa:</label><br>
                <input type="datetime-local" name="data" id="data">

            </div><br>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Editar</button>
                <button class="btn btn-primary" type="reset">Limpar campos</button>


            </div>
        </form>
        <br><br><button class="btn btn-primary">Cancelar Solicitação<a href="homeCliente.php"></a></button>
    </div>

</body>

</html>