<?php
include 'connect.php';
include 'functionLogin.php';

$nome = $_POST['nomeUsuario'];
$senha = $_POST['senha'];

if(validaLogin($connect, $nome, $senha)){
    header('location: ../views/estruture/sidebar.php');
}else{
    echo 'erro';
}