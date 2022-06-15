<?php
//1. RECUPERAR DADOS DO FORMULÁRIO

$numCartao = $_POST['numCartao'];
$nomeCartao = $_POST['nomeCartao'];
$cvc = $_POST['cvc'];

//2. CONECTAR AO SERVIDOR DE BANCO DE DADOS
include_once("conexao.php");

//3. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO BANCO DE DADOS
$sql = " INSERT INTO pagamento ( numeroCartao, nomeCartao, codigoSeguranca ) ";
$sql .= " VALUES ('$numCartao', '$nomeCartao', '$cvc') ";

//4. EXECUTAR SCRIPT SQL
$resultado = mysqli_query($conexao, $sql);

//5. REALIZAR PRCESSAMENTOS NECESSÁRIOS
if ($resultado) {
    //echo "<p>Cliente '$nome' cadastrado com sucesso.</p>";
    header("Location: index.php");
} else {
    echo "<p>Falha ao cadastrar cartão. Verifique!</p>";
}
