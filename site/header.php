<!DOCTYPE html>
<!--
Desenvolvimendo para disseminar conteúdo sobre Marketing digital e Empreendedorismo, com o objetivo
de ajudar pessoas à sair da era industrial e começar na era digital para alavancar seus negócios.
Blog www.orientme.com.br
-->
<?php require_once('controller/Config.inc.php'); ?>  
<?php require_once('../app/model/Configuracao.php'); ?>  
<html>
    <head>
        <meta charset="UTF-8">
        <meta  name = "viewport"  content = "width = device-width, inicial escala = 1" >
        <meta name="author" content="Christian de Ornellas">
        <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
            <meta name="description" content="<?= $resultado->descricao; ?>">
            <meta name="keywords" content="<?= $resultado->keyword; ?>">
        <?php endforeach; ?>
        <title>Impulsionando seu resultados na internet</title>
        <!--SMO FACEBOOK-->
        <!-- You can use Open Graph tags to customize link previews.
   Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
        <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Aqui vai o título do meu artigo" />
        <meta property="og:description"   content="Aqui vai o texto do meu artigo" />
        <meta property="og:image"         content="//static.pexels.com/photos/479/landscape-nature-sunset-trees.jpg" />
    </head>
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="icons/css/font-awesome.min.css"/>    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>  
<body>
    <header class="container main_header">
        <h1 title="" class="fontzero">Orientme</h1>   
        <div class="content">
            <figure class="logo"><a href="index">
                    <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
                        <img alt="Orientme" src="../app/public/uploads/<?= $resultado->logo; ?>"/></a>
                <?php endforeach; ?>
            </figure>

            <ul class="links-top">
                <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
                    <li><a title="" href="#christian-de-ornellas">Sobre</a></li>
                    <li><a title="" href="#artigos">Artigos</a></li>
                    <li><a title="Curta nossa Fan Page" target="_blank" href="//<?= $resultado->facebook; ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a title="Assine o nosso Canal" target="_blank" href="//www.youtube.com/channel/<?= $resultado->canal; ?>/videos"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a title="Nos siga no Instagram" target="_blank" href="//<?= $resultado->instagram; ?>/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a title="Acesse nosso Google Plus" target="_blank" href="//<?= $resultado->plus; ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <?php endforeach; ?>
            </ul>                
            <div class="clear"></div>  
        </div>                          
    </header>
    <nav class="container main_menu">
        <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
            <h1 title="<?= $resultado->keyword; ?>" class="fontzero"><?= $resultado->keyword; ?></h1>
        <?php endforeach; ?>
        <div class="content">                
            <ul class="menu">
                <li><a title="" href="#"><i class="fa fa-black-tie" aria-hidden="true"></i> Marketing Digital</a>
                    <ul>
                        <li><a href="#">ARTIGO 01</a></li>
                        <li><a href="#">ARTIGO 02</a></li>
                        <li><a href="#">ARTIGO 03</a></li>
                    </ul>

                </li>
                <li><a title="" href="#"><i class="fa fa-money" aria-hidden="true"></i> Vendas</a></li>
                <li><a title="" href="#"><i class="fa fa-globe" aria-hidden="true"></i> Tecnologia</a></li>
            </ul>
            <form class="assinar" method="post">
                <label>
                    <input type="email" class="form_input" placeholder="Cadastre-se aqui seu E-MAIL e saiba mais!"><button type="submit" name="assinar" class="btn-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Assinar</button>
                </label>                      
            </form>                 
            <div class="clear"></div>  
        </div>                          
    </nav>
    <!-- FIM DA HEADER -->
    <main>