<?php



?>

<!DOCTYPE html>
<html>

<head>
	<title>Pagamento</title>
	<link rel="shortcut icon" href="imagens/iconepag.ico">
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
	<div style="margin: 10px">
		<h3>Cadastrar Cartão de Crédito</h3>
		<div style="margin: 10px">
			<form action="cPagamento.php" method="POST">
				<div class="col-md-6">
                    
					<label class="form-label">Número do cartão</label>
					<input type="number" class="form-control" name="numCartao" id="numCartao" minlength="16" maxlength="16" placeholder="Insira o número do cartão" required>

					<label class="form-label">Nome do cartão</label>
					<input type="text" class="form-control" name="nomeCartao" id="nomeCartao" maxlength="16" placeholder="Insira o nome conforme está no cartão" required>

					<label class="form-label">Código de segurança</label>
					<input type="text" class="form-control" name="cvc" id="cvc" maxlength="3" placeholder="Insira o código de segurança" required>

				</div><br>

				<div class="col-12">
					<button class="btn btn-primary" type="submit">Cadastrar Cartão</button>
					<button class="btn btn-primary" type="reset">Limpar campos</button>

				</div>
			</form>
			<br>
		</div>
	</div>
</body>

</html>