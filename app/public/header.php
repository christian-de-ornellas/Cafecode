<?php
ob_start();
session_start();
if (!isset($_SESSION["id"]) || !isset($_SESSION["nome"]) || !isset($_SESSION["perfil"])) :
    session_destroy();
    echo"<script>alert('Opps, Acesso invalido!');</script>";
    header('Refresh: 0; url=../');
    exit;
endif;
header('Content-type: text/html; charset=UTF-8');
?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Configuracao.php'); ?> 
<!DOCTYPE html>
<!--
Café Code é um gestor de conteúdo
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Café code</title>
        <meta name="keywords" content="Escola, Ensino a distância, EAD, Vídeo aula">
        <meta name="Author" content="Christian de Ornellas Possidonio">
        <meta name="Description" content="Uma ferramenta digital para criar cursos online EAD.">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="icons/css/font-awesome.min.css"/>  
    </head>
    <body>
        <header class="container main_header">
            <div class="content">
                <div class="bemvindo">
                    <h1 title="" class="fontzero">CaféCode</h1>
                    <small>Seja bem vindo <b><?php echo $_SESSION["nome"]; ?></b></small>
                </div>
                <ul class="barra-user">                    
                    <li><i class="fa fa-sign-out" aria-hidden="true"></i>
                        <a href="sair">SAIR</a></li>                  
                    <li><a href='configuracao'><i class='fa fa-cog' aria-hidden='true'></i>CONFIGURAÇÃO</a></li>                 
                    <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
                        <li>                        
                            <a title='<?= $resultado->site; ?>' href='//<?= $resultado->site; ?>' target="_blank"><i class='fa fa-globe' aria-hidden='true'></i>VER SITE</a>                                            
                        </li>                 
                    <?php endforeach; ?>
                </ul> 
                <div class="clear"></div>
            </div>
        </header>
        <!-- end header -->
        <nav class="container main_menu">
            <div class="content">
                <figure class="logo"><a href="./"><img src="img/logo.png" width="150" /></a></figure>
                <!--MENU-->
                <ul>                     
                    <li><i class="fa fa-list" aria-hidden="true"> Listar</i>                        
                        <ul>
                            <li><a href="ver-artigos"><i class="fa fa-book" aria-hidden="true"></i> Artigos</a>
                            <li><a href="ver-categorias"><i class="fa fa-list-alt" aria-hidden="true"></i> Categorias</a>
                            <li><a href="ver-publicidades"><i class="fa fa-briefcase" aria-hidden="true"></i> Publicidades</a>
                            <li><a href="ver-usuarios"><i class="fa fa-users" aria-hidden="true"></i> Usuários</a>
                        </ul>
                    </li>

                    <li><i class="fa fa-plus" aria-hidden="true"></i> Criar                        
                        <ul>                            
                            <li><a href="publicar"><i class="fa fa-book" aria-hidden="true"></i> Artigo</a>
                            <li><a href="categoria"><i class="fa fa-list-alt" aria-hidden="true"></i> Categoria</a>
                            <li><a href="publicidade"><i class="fa fa-briefcase" aria-hidden="true"></i> Publicidade</a>
                            <li><a href="usuario"><i class="fa fa-user" aria-hidden="true"></i> Usuário</a>
                        </ul>
                    </li>                                 
                </ul> 
                <div class="clear"></div>
            </div>
        </nav>
        <!-- end nav -->
        <main>       