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
                
            </div>
            <div class="autor">
               <figure><img src="../app/public/uploads/<?= $resultado->foto; ?>" alt="[<?= $resultado->nome; ?>]"/></figure>
               <div class="autor-dados">
                   <p>Publicada por: <?= $resultado->nome; ?></p>
                   <data>Data: <?= $resultado->data_criada; ?></data>
               </div>                
            </div>
            <div class="BannerFeed">
                 <?php
                $feed = $resultado->feed;
                if ($feed > 0):
                    echo"<figure><img alt='$resultado->titulo' src='../app/public/uploads/$resultado->feed'/></figure>";
                else:
                     echo"<figure style='display:none!important; position:absolute!important; top:!important; margin:0 auto!important; padding:0!important;'></figure>";
                endif;
                ?>
            </div>
            
            <div id="disqus_thread"></div>
        </div>
        <sidebar class="box25 sidebar">
            <div class="banner">
                <?php
                $lateral = $resultado->lateral;
                if ($lateral > 0):
                    echo"<figure><img alt='$resultado->titulo' src='../app/public/uploads/$resultado->lateral'/></figure>";
                else:
                     echo"<figure style='display:none!important; position:absolute!important; top:!important; margin:0 auto!important; padding:0!important;'></figure>";
                endif;
                ?>

            </div>    
            <div class="post">
                <?php  
                 $categoria = $resultado->categoria_id;                   
               foreach ($Artigo->Recomendados($categoria_id) as $key => $recomendado):
                ?>
                <figure><img alt="[<?= $recomendado->titulo;?>]" src="../app/public/uploads/<?= $recomendado->imagem;?>"/></figure>
                <p><?= $recomendado->titulo;?></p>            
                    <?= "<a title='Clique e leia mais' href='artigo.php?acao=ver&id=" . $recomendado->id . "'>Ler mais...</a>"; ?>
                <?php endforeach; ?>
            </div>           
        </sidebar>        
        <div class="clear"></div>
    </div>
</article>
<?php include ('footer.php') ?>