<?php 
session_start();
$pasta1 = "";
$pasta2 = "";
if(isset($_SESSION['login'])){ ?>


<form method="POST" action="processamentoImagem.php" enctype="multipart/form-data">
    <input type="text" name="nome"></br>
    <input type="email" name="email"></br>
    <input type="file" name="foto"></br>
    <input type="submit" name="submit" value="enviar">
</form>


<?php }else{ ?>

<h2>deslogado</h2>

<?php } ?>