<?php
    include 'db.php';
    //require 'resultado.php'
    session_start();
    ?>
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
        <ul class="menu">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#projetosCorporativos">Projetos corporativos</a>
                <ul>
                    <li><a href="projeto1.php">Projeto 1</a></li>
                    <li><a href="projeto2.php">Projeto 2</a></li>
                    <li><a href="projeto3.php">Projeto 3</a></li>
                </ul>
            </li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#contato">Contato</a></li>
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
    </section><!-- menuElogo -->

    <div class="titulo">
        <h1>Especialistas em instalação de <span>projetores<span>.</h1>
    </div>
    
    <section class="capa">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Images-renan/IMG-20191220-WA0001.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/Images-renan/IMG-20191220-WA0049.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/Images-renan/IMG-20191220-WA0023.jpg" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    
    <div class="project">
        <div class="topicos">
            <p>Faça um projeto com qualidade diferenciada</p>
            <ul>
                <li>Conte com consultores especialistas no assunto;</li>
                <li>Obtenha um orçamento adequado às suas necessidades e objetivos;</li>
                <li>Ofereça uma experiência marcante para os usuários;</li>
                <li>Conte com o nosso atendimento impecável antes, durante e no pós-venda.</li>
            </ul>
        </div>
        <img src="images/projetor.png" alt="projetor">
    </div>
    <section id="projetosCorporativos">
        <h3>Projetos corporativos</h3>
        <div class="conjuntoServicos">
            <div class="imgProjetos">
                <img src="images/concerto.jpg" alt="">
                <h4>titulo do projeto</h4>
                <p>Quando o seu equipamento apresentar problemas técnicos, <a href="#contato">solicite um orçamento conosco</a>.
                    Temos técnicos altamente capacitados para consertar a maioria dos produtos do mercado.
                </p>
            </div>
            <div class="imgProjetos">
                <img src="images/projetosCorporativo.jpg" alt="">
                <h4>titulo do projetos</h4>
                <p>Se a sua empresa necessita de ajuda para otimizar seus recursos e fazer um projeto que
                    realmente atenda as suas expectativas, entre em contato conosco. Somos especialistas 
                    em auditórios, salas de reunião e de presidência.
                </p>
            </div>
            <div class="imgProjetos">
                <img src="images/instalacao.jpg" alt="">
                <h4>titulo do projetos</h4>
                <p>Fazemos projetos personalizados e instalamos todo o sistema multimídia e audiovisual 
                    que o seu ambiente necessita. Nossos técnicos entenderão a sua necessidade para lhe 
                    apresentar a melhor relação custo-benefício do mercado.
                </p>
            </div>
        </div>

        <?php if(isset($_SESSION['login'])){ ?>
            <a href="inserirImagens.php">Inserir novas fotos</a>
        <?php } ?>
    </section><!--Projetos Corporativos-->

    <div id="servicos"></div>
    <section class="servicos">
        <h3>Nossos serviços</h3>
        <div class="conjuntoServicos">
            <div class="imgServicos">
                <img src="images/concerto.jpg" alt="">
                <h4>Concertos</h4>
                <p>Quando o seu equipamento apresentar problemas técnicos, <a href="#contato">solicite um orçamento conosco</a>.
                    Temos técnicos altamente capacitados para consertar a maioria dos produtos do mercado.
                </p>
            </div>
            <div class="imgServicos">
                <img src="images/projetosCorporativo.jpg" alt="">
                <h4>Projetos Corporativos</h4>
                <p>Se a sua empresa necessita de ajuda para otimizar seus recursos e fazer um projeto que
                    realmente atenda as suas expectativas, entre em contato conosco. Somos especialistas 
                    em auditórios, salas de reunião e de presidência.
                </p>
            </div>
            <div class="imgServicos">
                <img src="images/instalacao.jpg" alt="">
                <h4>Instalação</h4>
                <p>Fazemos projetos personalizados e instalamos todo o sistema multimídia e audiovisual 
                    que o seu ambiente necessita. Nossos técnicos entenderão a sua necessidade para lhe 
                    apresentar a melhor relação custo-benefício do mercado.
                </p>
            </div>
        </div>
    </section><!--Serviços-->

    <section id="contato">
        <h3>Contato</h3>
        <div class="dadosContato">
            <h4>Informações para contato</h4>
            <ul class="fh5co-footer-links">
                <li>Centro, Piraquara</li>
                <li>Whats: <a href="tel:41991595540">(41)9 9159-5540</a></li>
                <li>Telefone: <a href="#">(41)3233 9924</a></li>
                <li>Email: <a href="mailto:Je.wolff@outlook.com">Je.wolff@outlook.com</a></li>
            </ul>
        </div>
        <div class="mapa">
            <div id="map"></div>
        </div>
    </section><!--Contato-->

    <section class="footer">
        <div class="empresa">
            <img src="https://c7.uihere.com/files/344/531/587/linkedin-social-media-blog-social-network-computer-icons-jc-thumb.jpg" alt="">
            <h4>JCleres</h4>
        </div>
    </section><!--footer-->

    <!--WhatsApp-->
    <div class="whats">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/5541991595540?text=Olá%20gostaria%20de%20fazer%20um%20orçamento!" target="_blank">
        <i style="margin-top:16px" class="fa fa-whatsapp"></i>
        </a>
    </div>
	<!--WhatsApp-->

    <div id="app">
        {{ message }}
    </div>
    
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=">
    </script>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>