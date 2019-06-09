<?php
include 'connect.php';

function validaLogin($connect, $email, $senha){
$array = array ();
$buscaUser = "SELECT * FROM USUARIO where emailUsuario = '{$email}' and senhaUsuario = '{$senha}'";
$executaBusca = mysqli_query($connect, $buscaUser);
if(mysqli_num_rows ($executaBusca) > 0 )
  {
    session_start();
    $_SESSION['login'] = $email;
    $_SESSION['senha'] = $senha;
    header('location:../views/estruture/sidebar.php');
  }
else
  {
    session_start();
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    $erro = true;
    header("location:../index.php?erro={$erro}");
  }
}
?>