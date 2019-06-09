<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="shortcut icon" href="img/w.ico" />
</head>
<body>
<div class="grid">
    <form action="config/loginAuth.php" method="post" class="form login">
      <header class="login__header">
        <h3 class="login__title">Acessar Conta</h3>
      </header>
      <div class="login__body">
        <div class="ff">
          <input type="email" name="nomeUsuario" placeholder="E-mail" required>
        </div>
        <div class="ff">
          <input type="password" name="senha" placeholder="Senha" required>
        </div>
      </div>  
      <footer class="login__footer">
        <input type="submit" value="Acessar">
        <div class="tooltip"><span class="icon icon--info">?</span>
          <span class="icon icon--info tooltipHover">Caso você tenha perdido, esquecido ou não sabe sua senha, 
            clique neste link para recuperá-la</span><a href="#">Esqueceu sua senha?</a>
        </div>
        <p id="retorno"></p>
        </footer>
    </form>
  </div>
</body>
</html>