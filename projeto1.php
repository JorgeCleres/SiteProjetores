<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetores</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js" media="screen">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/34b3e7ad7b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="inicio"></div>
    <section class="menuElogo">
        <img src="images/logo/logo.png" alt="">
        <ul>
            <a href="index.php#inicio"><li>Inicio</li></a>
            <a href="#projetosCorporativos"><li>Projetos corporativos</li></a>
            <a href="index.php#servicos"><li>Serviços</li></a>
            <a href="index.php#contato"><li>Contato</li></a>
            <?php if(!isset($_SESSION['login'])){ ?>
                <a href="login.php"><img src="images/icons/login.png"></a>
            <?php } ?>
            <?php if(isset($_SESSION['login'])){ ?>
                <a href="logout.php">
                    <?php echo $_SESSION['usuario']; ?>
                    (sair)
                </a>
            <?php } ?>
        </ul>
    </section>
    <h2 id="projetoh2">Projeto Tals</h2>
    <section class="projeto">
        <div class="imagens">
            <img src="images/Images-renan/projeto1/IMG-20191220-WA0040.jpg" alt="">
            <img src="images/Images-renan/projeto1/IMG-20191220-WA0043.jpg" alt="">
            <img src="images/Images-renan/projeto1/IMG-20191220-WA0044.jpg" alt="">
            <img src="images/Images-renan/projeto1/IMG-20191220-WA0048.jpg" alt="">
            
        </div>
        <div class="info">
            <h3>Sobre o Projeto</h3>
            <p>Tals tals Tals tals Tals tals Tals tals 
            Tals tals Tals tals Tals tals Tals tals Tals tals Tals tals 
            Tals tals Tals tals Tals tals 
            </p>
        </div>
    </section>