<?php
include 'connect.php';


function validaLogin($connect, $nome, $senha){
$array = array ();
$buscaUser = "SELECT * FROM USUARIO where emailUsuario = '{$nome}' and senha = '{$senha}'";
$executaBusca = mysqli_query($connect, $buscaUser);
if(mysqli_num_rows ($executaBusca) > 0 )
{
$_SESSION['login'] = $nome;
$_SESSION['senha'] = $senha;
header('location:../views/estruture/sidebar.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:../index.php');
  }
}
?>