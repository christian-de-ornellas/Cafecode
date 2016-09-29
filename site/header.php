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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="" type="image/x-icon">
        <meta name="author" content="Christian de Ornellas">
        <meta name="generator" content="CafecodeV1.3">
        <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
            <meta name="description" content="<?= $resultado->descricao; ?>">
            <meta name="keywords" content="<?= $resultado->keyword; ?>">
        <?php endforeach; ?>
        <title>Impulsionando seu resultados na internet</title>        
        <link rel="stylesheet" href="css/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="icons/css/font-awesome.min.css"/>    
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">

        <!-- SMO COMPARTILHAMENTO COM AS REDES SOCIAIS-->
        <!-- #FACEBOOK -->
        <meta property="og:url"          content="http://cs3-info.com.br" />
        <meta property="og:type"         content="website" />
        <meta property="og:title"        content="Montagem e Manutenção de Computadores" />
        <meta property="og:description"  content="Não deixe o seu computador nas mãos de qualquer um, atuamos há mais de 15 anos com montagem e manutenção de computadores. Agende agora mesmo uma visita em sua casa ou empresa!" />
        <meta property="og:image"        content="http://www.cs3-info.com.br/assets/images/publicidade.jpg" />
        <meta property="og:image:width"  content="1200">
        <meta property="og:image:height" content="628">

        <!-- #GOOGLE PLUS -->
    <html itemscope itemtype="http://schema.org/Person">
        <meta itemprop="name" content="Montagem e Manutenção de Computadores">
        <meta itemprop="description" content="Não deixe o seu computador nas mãos de qualquer um, atuamos há mais de 15 anos com montagem e manutenção de computadores. Agende agora mesmo uma visita em sua casa ou empresa!">
        <meta itemprop="image" content="http://cs3-info.com.br/assets/images/publicidade.png">
        <!-- #TWITTER -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MontagemEManutençãoDeComputadores" />
        <meta name="twitter:title" content="Montagem e Manutenção de Computadores" />
        <meta name="twitter:description" content="Não deixe o seu computador nas mãos de qualquer um, atuamos há mais de 15 anos com montagem e manutenção de computadores. Agende agora mesmo uma visita em sua casa ou empresa!" />
        <meta name="twitter:image" content="http://cs3-info.com.br/assets/images/avatar.png" />
        <meta name="twitter:url" content="http://cs3-info.com.br/" />
    </head>  
    <body>
        <!-- INÍCIO DA HEADER -->
        <header class="container main_header">
            <h1 title="" class="fontzero">Orientme</h1>   
            <div class="content">
                <figure class="logo"><a href="./">
                        <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
                            <img alt="<?= $resultado->site; ?>" src="../app/public/uploads/<?= $resultado->logo; ?>"/></a>
                    <?php endforeach; ?>
                </figure>
                <!-- MENU DE NAVEGAÇÃO DA HEADER -->
                <ul class="links-top">
                    <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
                        <li><a title="Inicio do site" href="./"><i class="fa fa-home" aria-hidden="true"></i> Inicío</a></li>
                        <li><a title="Sobre Christian de Ornellas" href="./#christian-de-ornellas"><i class="fa fa-user" aria-hidden="true"></i> Sobre</a></li>
                        <li><a title="Outros artigos" href="./#artigos"><i class="fa fa-book" aria-hidden="true"></i> Artigos</a></li>
                        <li><a title="Curta nossa Fan Page" target="_blank" href="//<?= $resultado->facebook; ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a title="Assine o nosso Canal" target="_blank" href="//www.youtube.com/channel/<?= $resultado->canal; ?>/videos"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a title="Nos siga no Instagram" target="_blank" href="//<?= $resultado->instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a title="Nos siga no Google Plus" target="_blank" href="//<?= $resultado->plus; ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                    <?php endforeach; ?>
                </ul>                
                <div class="clear"></div>  
            </div>                          
        </header>
        <!-- FIM DA HEADER -->
        <main>