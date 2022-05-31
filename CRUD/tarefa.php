<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link rel="shortcut icon" href="imagens/iconepag.ico">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>

    <div class="col-md-6" style="margin: 1%">
        <h2>Tarefas</h2>
        <form action="cTarefa.php" method="POST">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tarefa" id="entregar">
                <label class="form-check-label">
                    Entregar
                </label>
            </div><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tarefa" id="Comprar">
                <label class="form-check-label">
                    Buscar
                </label>
            </div><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tarefa" id="Comprar">
                <label class="form-check-label">
                    Comprar
                </label>
            </div><br><br>
            <div>
                <label class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereço para onde deseja a tarefa" required>
            </div><br>
            <div>
                <label class="form-label">Informe quando deseja solicitar a tarefa</label><br>
                <input type="datetime-local" name="data" id="data">

            </div><br>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Solicitar</button>
                <button class="btn btn-primary" type="reset">Limpar campos</button>
                

            </div>
        </form>
        <br><br><button class="btn btn-primary" >Cancelar Solicitação<a href="homeCliente.php"></a></button>
    </div>

</body>

</html>