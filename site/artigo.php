<?php include ('header.php') ?>
<?php require_once('controller/Config.inc.php'); ?>  
<?php require_once('../app/model/Artigos.php'); ?>  
<article class="container artigo">
    <div class="content">
        <div class="box65">            
            <figure><img src="../app/public/uploads/<?= $resultado->imagem; ?>" alt="[<?= $resultado->titulo; ?>]"/></figure>
            <h1 title="<?= $resultado->titulo; ?>"><?= $resultado->titulo; ?></h1>
            <div class="share">               
                <!-- SHARE PARA COMPARTILHAR NAS REDES SOCIAIS-->
                <div class="addthis_inline_share_toolbox"></div>
            </div>

            <div class="texto">
                <?= $resultado->texto; ?>
                <data><?= $resultado->data_criada; ?></data>
            </div>
            <div id="disqus_thread"></div>
        </div>
        <sidebar class="box25 sidebar">
            <div class="banner">
                <figure><img alt="[]" src="images/sonho.jpeg"/></figure>
            </div>    
            <div class="post">
                <figure><img alt="[]" src="images/redes-sociais.png"/></figure>
                <p>Eu estou aqui precisando ler de que tudo precisa para poder ler agora sem falta.</p>            
                <a href="#">Ler mais...</a>
            </div>
            <div class="post">
                <figure><img alt="[]" src="images/redes-sociais.png"/></figure>
                <p>Eu estou aqui precisando ler de que tudo precisa para poder ler agora sem falta.</p>            
                <a href="#">Ler mais...</a>
            </div>
            <div class="post">
                <figure><img alt="[]" src="images/redes-sociais.png"/></figure>
                <p>Eu estou aqui precisando ler de que tudo precisa para poder ler agora sem falta.</p>            
                <a href="#">Ler mais...</a>
            </div>
            <div class="post">
                <figure><img alt="[]" src="images/redes-sociais.png"/></figure>
                <p>Eu estou aqui precisando ler de que tudo precisa para poder ler agora sem falta.</p>            
                <a href="#">Ler mais...</a>
            </div>
        </sidebar>        
        <div class="clear"></div>
    </div>
</article>
<?php include ('footer.php') ?>