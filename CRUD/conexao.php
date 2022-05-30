<?php
/*
	mysqli_connect(
		SERVIDOR, 
		USUARIO DO BD, 
		SENHA DO USUARIO, 
		NOME DO BD);
	*/
	$conexao = mysqli_connect("localhost", "root", "", "pequenos_afazeres");
	
	if(!$conexao){
		$msg  = "Falha na conexão com o BD";
		header("Location: index.php?m=$msg");
		exit();
	}
