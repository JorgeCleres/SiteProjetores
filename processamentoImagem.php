<?php
    session_start();
    
if(isset($_POST['nome'])){
    if ($_FILES['foto']['type'] == 'image/png'){
        $nome_arquivo = md5($_FILES['foto']['name'].rand(1,999)).'.png';
        if (isset($_FILES['foto']))
    {
        move_uploaded_file($_FILES['foto']['tmp_name'], 'images/imagensUpload'.$nome_arquivo);
        header('location:inserirImagens.php');
        echo "imagem enviada com sucesso";
    }
    
    }elseif($_FILES['foto']['type'] == 'image/jpeg') {
        $nome_arquivo = md5($_FILES['foto']['name'].rand(1,999)).'.jpg';
        if (isset($_FILES['foto']))
    {
        move_uploaded_file($_FILES['foto']['tmp_name'], 'images/imagensUpload'.$nome_arquivo);
        header('location:inserirImagens.php');
        echo "imagem enviada com sucesso";
    }
    
    }else {
        echo "formato do arquivo inválido";
    }


    
}

?>