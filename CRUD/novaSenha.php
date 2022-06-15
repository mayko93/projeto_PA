<?php
//1. RECUPERAR DADOS DO FORMULÁRIO
$id = $_GET['a'];

//2. CONECTAR AO SERVIDOR DE BANCO DE DADOS
include_once("conexao.php");

//3. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO BANCO DE DADOS
$sql = "SELECT id_cliente, nome, cpf FROM cliente";
$sql .= " WHERE id_cliente = " . $id;

//4. EXECUTAR SCRIPT SQL
$resultado = mysqli_query($conexao, $sql);

//5. TRATAR DADOS RECUPERADOS DO BANCO DE DADOS
$arResultado = mysqli_fetch_assoc($resultado);

//6. FECHAR CONEXÃO COM O BANCO DE DADOS
mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova senha</title>
    <link rel="shortcut icon" href="imagens/iconepag.ico">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div style="margin: 10px">
        <h3>Nova senha</h3>
        <div style="margin: 10px">
            <form action="cNovaSenha.php" method="POST">
                <div class="col-md-6">

                    <label class="form-label">ID: </label><?php echo $arResultado['id_cliente']; ?>
                    <input type="hidden" name="id" value="<?php echo $arResultado['id_cliente']; ?>" class="form-control"><br />

                    <label class="form-label">Nome: </label><?php echo $arResultado['nome']; ?><br />

                    <label class="form-label">CPF: </label><?php echo $arResultado['cpf']; ?><br />

                    <label class="form-label">Nova Senha: </label>
                    <input type="password" name="senha" placeholder="Informe uma nova senha" class="form-control"><br />

                    <label class="form-label">Confirme a Senha: </label>
                    <input type="password" name="senhaConfirma" placeholder="Confirme sua senha" class="form-control"><br />

                </div><br>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Atualizar senha</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>