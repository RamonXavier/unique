<?php
include 'config/functionLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="shortcut icon" href="img/w.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    


</head>
<body>
<?php if(array_key_exists("erro", $_GET) && $_GET['erro']== '1') { ?>
      <p class="alert-danger">Não foi encontrado usuário e senha com os dados uinformados!</p> 
      <?php
      }?>
<div class="grid">
    <form action="config/loginAuth.php" method="post" class="form login">
      <header class="login__header">
        <h3 class="login__title">Acessar Conta</h3>
      </header>
      <div class="login__body">
        <div class="ff">
          <input type="email" name="emailUsuario" placeholder="exemplo@email.com" required>
        </div>
        <div class="ff">
          <input type="password" name="senhaUsuario" placeholder="Senha" required>
        </div>
      </div>  
      <footer class="login__footer">
        <input type="submit" value="Acessar">
        <div class="tooltip"><span class="icon icon--info">?</span>
          <span class="icon icon--info tooltipHover">Caso você tenha perdido ou esquecido sua senha, 
            clique neste link para recuperá-la</span><a href="#">Esqueceu sua senha?</a>
        </div>
        <p id="retorno"></p>
        </footer>
    </form><br>
  </div>
</body>
</html>