<?php 

session_start();
if(!$_SESSION['LOGADO'] == true){
    $msg = "Para acessar esta página, é necessário estar logado";
    header("Location: login.php?m=$msg");
    exit();
}

?>