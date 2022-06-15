<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci a senha</title>
    <link rel="shortcut icon" href="imagens/iconepag.ico">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div style="margin: 10px">
        <h3>Redefinir senha do usuário</h3>
        <div style="margin: 10px">
            <form action="cEsqueciSenha.php" method="POST">
                <div class="col-md-6">

                    <label class="form-label">Digite seu CPF para redefinir a senha</label>
                    <input type="number" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF" required>

                </div><br>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>