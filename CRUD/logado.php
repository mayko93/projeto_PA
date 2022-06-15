<?php 

session_start();
if(!$_SESSION['LOGADO'] == true){
    $msg = "<b>Para acessar esta página, é necessário estar logado</b>";
    header("Location: login.php?m=$msg");
    exit();
}
