<?php 
session_start();
if(isset($_SESSION['login'])){ ?>

<form method="POST" action="processamentoImagem.php" enctype="multipart/form-data">
    <input type="file" name="foto[]" multiple></br>
    <input type="submit" name="submit" value="enviar">
</form>
<?php }else{ ?>

<h2>deslogado</h2>

<?php } ?>