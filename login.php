<?php if(isset($_GET['erro'])){ ?>
    <div class="alert alert-warning" role="alert">
    Usuário e/ou senha inválido.
    </div>
<?php } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetores</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js" media="screen">
</head>

<div class="wrapper fadeInDown">
    <h1>Login</h1>
    <div id="formContent">

    <!-- Icon -->
    <div class="fadeIn first">
      <a href="index.php"><img src="images/logo/logo.png" id="icon" alt="User Icon" /></a>
    </div>

    <form action="script.php" method="post">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Nome usuario">
      <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>
  </div>
</div>