<?php
include 'connect.php';
include 'functionLogin.php';

$email = $_POST['emailUsuario'];
$senha = $_POST['senhaUsuario'];

if(validaLogin($connect, $email, $senha)){
    header('location: ../views/estruture/sidebar.php');
}else{
    echo 'erro';
}