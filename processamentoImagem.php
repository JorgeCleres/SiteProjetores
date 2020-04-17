<?php 
    session_start();

if(isset($_POST['submit']))//verifica se foi clicado no submit
{
    for($i=0; $i< count($_FILES['foto']['name']); $i++)//percorre o array 'foto'
    {
        if($_FILES['foto']['type'][$i] == 'image/png')//verifica cada foto para vero formato
        {
            $nome_arquivo = md5($_FILES['foto']['name'][$i].rand(1,999)).'.png';
            if (isset($_FILES['foto']))//verifica se foi enviado uma foto
            {
                move_uploaded_file($_FILES['foto']['tmp_name'][$i],'images/imagensUpload/'.$nome_arquivo);
            }
            ?><script>alert('upload feito com sucesso')</script>
                <meta http-equiv="refresh" content="0; url=inserirImagens.php">
            <?php
        
        }elseif($_FILES['foto']['type'][$i] == 'image/jpeg')
        {
            $nome_arquivo = md5($_FILES['foto']['name'][$i].rand(1,999)).'.jpeg';
            if(isset($_FILES['foto']))
            {
                move_uploaded_file($_FILES['foto']['tmp_name'][$i] ,'images/imagensUpload/'.$nome_arquivo);
            }
            ?><script>alert('upload feito com sucesso')</script>
                <meta http-equiv="refresh" content="0; url=inserirImagens.php">
            <?php
        }else {
            ?><script>alert('erro no upload')</script>
                <meta http-equiv="refresh" content="0;">
            <?php
        }
    }
}
