<?php

include 'db.php';

$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);

//checando se usuário e senha existem no banco de dados
$query = "select * from usuarios where usuario = '$usuario' and senha = '$senha'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1) {

    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    header('location:index.php');
}else {
    header('location:login.php?erro');
}