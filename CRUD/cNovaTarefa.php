<?php
//VERIFICAR SE O USUÁRIO ESTÁ LOGADO
include_once("logado.php");

//1. RECUPERAR DADOS DO FORMULÁRIO
    $tarefa = $_POST['tarefa'];
    $endereco = $_POST['endereco'];
    $data = $_POST['data'];
    $cpfTarefa = $_POST['cpf'];
    
//2. CONECTAR AO SERVIDOR DE BANCO DE DADOS
    include_once("conexao.php");

//3. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO BANCO DE DADOS
    $sql = " INSERT INTO tarefa (tipo, enderecoTarefa, dataHora, codigoTarefa)";
    $sql .= " VALUES ('$tarefa', '$endereco', '$data', '$cpfTarefa')";

//4. EXECUTAR SCRIPT SQL
    $resultado = mysqli_query($conexao, $sql) ;

//5. REALIZAR PRCESSAMENTOS NECESSÁRIOS
    if($resultado){
        //echo "<p>Cliente '$nome' cadastrado com sucesso.</p>";
        header("Location: homeCliente.php");
        echo "<h4> Nova tarefa solicitada com sucesso </h4>";
    }else{
        echo "<h4>Falha ao solicitar tarefa. Verifique!</h4>";
    }
