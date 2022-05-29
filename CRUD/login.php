<?php ?>

<!DOCTYPE html>
<html>
	<head>
		<title>USUÁRIO</title>
		<link rel="shortcut icon" href="imagens/iconepag.ico">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
	</head>
	<body>
		<div style="margin: 10px">
			<h3 >Login de Usuário</h3>
			<div style="margin: 10px">
				<form action="login.php" method="POST">
					<div class="col-md-6">

                        <label class="form-label">CPF</label>
                        <input type="number" class="form-control" id="cpf" placeholder="Digite seu CPF" required>

                        <label class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Crie uma senha" required>

					</div><br>

					<div class="col-12">
			  			<button class="btn btn-primary" type="submit">Cadastrar</button>
						<button class="btn btn-primary" type="reset">Limpar</button>
					</div>
				</form>
				<br>
                <label class="form-label"><b>Ainda não é cadastrado?</b></label><br>
				<a class="btn btn-warning" href="cadastrar.php">Fazer cadastro</a>
			</div>
		</div>
	</body>
</html>