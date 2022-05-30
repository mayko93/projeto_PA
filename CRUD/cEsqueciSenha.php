<?php
//1. RECUPERAR DADOS DO FORMULÁRIO
    $cpf = $_POST['cpf'];

//2. CONECTAR AO SERVIDOR DE BANCO DE DADOS
    include_once("conexao.php");

//3. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO BANCO DE DADOS
    $sql = "SELECT id_cliente, cpf FROM cliente";
    $sql .= " WHERE cpf = '$cpf' ";

//4. EXECUTAR SCRIPT SQL
    $resultado = mysqli_query($conexao, $sql) ;

//5. TRATAR DADOS RECUPERADOS DO BANCO DE DADOS
    $arResultado = mysqli_fetch_assoc($resultado);
    $rows = mysqli_num_rows($resultado) ;//NÚMERO DE LINHAS

//6. REALIZAR PROCESSAMENTOS NECESSÁRIOS
    if($resultado){
    //RETORNOU MAIS DE UM REGISTRO?
    if($rows > 0){
        $idCliente = $arResultado['id_cliente'];
        header("Location: novaSenha.php?a=$idCliente");
        exit();
    }else{
        $msg = "Dados informados são inválidos";
        header("Location: esqueciSenha.php?m=$msg");
        exit();
        }
    }else{
        $msg = "Não foi possível gerar nova senha. Tente novamente mais tarde";
        header("Location: index.php?m=$msg");
        exit();
    }

    //7. FECHAR CONEXÃO COM BANCO DE DADOS
        mysqli_close($conexao);