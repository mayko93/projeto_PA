<?php



?>

<!DOCTYPE html>
<html>

<head>
	<title>USUÁRIO</title>
	<link rel="shortcut icon" href="imagens/iconepag.ico">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
	<div style="margin: 10px">
		<h3>Cadastrar Usuário</h3>
		<div style="margin: 10px">
			<form action="cCadastrar.php" method="POST">
				<div class="col-md-6">

					<label class="form-label">Nome</label>
					<input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" class="form-control" required>

					<label class="form-label">CPF</label>
					<input type="number" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF" required>

					<label class="form-label">Telefone</label>
					<input type="number" class="form-control" name="telefone" id="telefone" placeholder="Digite seu Telefone" required>

					<label class="form-label">Endereço</label>
					<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite seu Endereço" required>

					<label class="form-label">E-mail</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Digite um E-mail válido" required>

					<label class="form-label">Senha</label>
					<input type="password" class="form-control" name="senha" id="senha" placeholder="Crie uma senha" required>

					<label class="form-label">Confirme a senha</label>
					<input type="password" class="form-control" name="cSenha" id="cSenha" placeholder="Digite a senha novamente" required>

				</div><br>

				<div class="col-12">
					<button class="btn btn-primary" type="submit">Cadastrar</button>
					<button class="btn btn-primary" type="reset">Limpar campos</button>

				</div>
			</form>
			<br>
			<label class="form-label"><b>Já é cadastrado?</b></label><br>
			<a class="btn btn-warning" href="login.php">Fazer login</a>
		</div>
	</div>
</body>

</html>