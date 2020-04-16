<?php 
session_start();
if(isset($_SESSION['login'])){ ?>

<form method="POST" action="processamentoImagem.php" enctype="multipart/form-data">
    <input type="text" name="nome"></br>
    <input type="email" name="email"></br>
    <input type="file" name="foto[]" multiple></br>
    <input type="submit" name="submit" value="enviar">
</form>
<?php $msgSucesso = isset($_SESSION['msgSucesso']) ? $_SESSION['msgSucesso'] : '';
      $msgErro = isset($_SESSION['msgErro']) ? $_SESSION['msgErro'] : '';
      if (!empty($msgSucesso)) {
          echo $msgSucesso;
      }
      if (!empty($msgErro)){
          echo $msgErro;
      }
      ?>
<?php }else{ ?>

<h2>deslogado</h2>

<?php } ?>