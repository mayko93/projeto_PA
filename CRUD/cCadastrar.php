<?php
//1. RECUPERAR DADOS DO FORMULÁRIO
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$cSenha = md5($_POST['cSenha']);
$perfil = $_POST['perfilUsuario'];
//1.1 VERIFICAR SE SENHAS SÃO IGUAIS
if ($senha == $cSenha) {
    //echo "Senhas iguais";
} else {
    echo "SENHAS DIFERENTES!";
    header("Location: cadastrar.php");
}

//2. CONECTAR AO SERVIDOR DE BANCO DE DADOS
include_once("conexao.php");

//3. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO BANCO DE DADOS
$sql = " INSERT INTO cliente (nome, cpf, telefone, endereco, email, senha, perfil)";
$sql .= " VALUES ('$nome', '$cpf', '$telefone', '$endereco', '$email', '$senha', '$perfil')";

//4. EXECUTAR SCRIPT SQL
$resultado = mysqli_query($conexao, $sql);

//5. REALIZAR PRCESSAMENTOS NECESSÁRIOS
if ($resultado) {
    //echo "<p>Cliente '$nome' cadastrado com sucesso.</p>";
    header("Location: pagamento.php");
} else {
    echo "<p>Falha ao cadastrar cliente. Verifique!</p>";
}
