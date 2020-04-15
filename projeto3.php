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
            <a href="#inicio"><li>Inicio</li></a>
            <a href="#projetosCorporativos"><li>Projetos corporativos</li></a>
            <a href="#servicos"><li>Serviços</li></a>
            <a href="#contato"><li>Contato</li></a>
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