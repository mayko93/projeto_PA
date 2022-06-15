<?php
//VERIFICAR SE O USUÁRIO ESTÁ LOGADO
include_once("logado.php");

//1. RECUPERAR DADOS DO FORMULÁRIO
    $tarefa = $_POST['tarefa'];
    $endereco = $_POST['endereco'];
    $data = $_POST['data'];
    
//2. CONECTAR AO SERVIDOR DE BANCO DE DADOS
    include_once("conexao.php");

//3. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO BANCO DE DADOS
    $sql = " UPDATE tarefa SET tipo = '$tarefa', ";
    $sql .= " enderecoTarefa = '$endereco', dataHora = '$data' ";
    $sql .= " WHERE id_tarefa = " . $_POST['id'];

//4. EXECUTAR SCRIPT SQL
    $resultado = mysqli_query($conexao, $sql) ;

//5. REALIZAR PRCESSAMENTOS NECESSÁRIOS
    if($resultado){
        //echo "<p>Cliente '$nome' cadastrado com sucesso.</p>";
        header("Location: homeCliente.php");
        echo "<h4> Tarefa editada com sucesso </h4>";
    }else{
        echo "<h4>Falha ao editar tarefa. Verifique!</h4>";
    }
