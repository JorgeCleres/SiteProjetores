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
                $_SESSION['msgSucesso'] = "upload feito com sucesso";
                header('location:inserirImagens.php');
                return;
            }
        }elseif($_FILES['foto']['type'][$i] == 'image/jpeg')
        {
            $nome_arquivo = md5($_FILES['foto']['nome'][$i].rand(1,999)).'.jpeg';
            if(isset($_FILES['foto']))
            {
                move_uploaded_file($_FILES['foto']['tmp_name'][$i] ,'images/imagensUpload/'.$nome_arquivo);
                $_SESSION['msgSucesso'] = "upload feito com sucesso";
                header('location:inserirImagens.php');
                return;
            }
        }else {
            $_SESSION['msgErro'] = "falha no uploado, verifique o formato do arquivo.";
            header('location:inserirImagens.php');
            return;
        }
    }
}

function removeMsgSucesso () : void
{
    if(isset($_SESSION['msgSucesso'])){
        unset($_SESSION['msgSucesso']);
    }
}