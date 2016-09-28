<?php require_once ('header.php'); ?>
<?php require_once('controller/Config.inc.php'); ?>  
<?php require_once('../app/model/Artigos.php'); ?>  
<?php require_once('../app/model/Categorias.php'); ?>
<?php require_once('../app/model/Configuracao.php'); ?>  
<article class="container gradiente">
    <div class="content">
        <header class="post-principal">
            <?php foreach ($Artigo->PostPrincipal() as $key => $ultimo): ?>
                <figure><img alt="<?= $ultimo->titulo; ?>" src="../app/public/uploads/<?= $ultimo->imagem; ?>"/></figure>
                <h3 title="<?= $ultimo->titulo; ?>"><?= $ultimo->titulo; ?></h3>                
                <?= "<a title='Ler mais' href='artigo.php?acao=editar&id=" . $ultimo->id . "'><button class='btn-submit'>Ler mais <i class='fa fa-chevron-circle-right' aria-hidden='true'></i></button></a>"; ?>
            <?php endforeach; ?>
        </header>
        <div class="post-ultimos">
            <?php foreach ($Artigo->PostSegundo() as $key => $segundo): ?>
                <figure><img alt="<?= $segundo->titulo; ?>" src="../app/public/uploads/<?= $segundo->imagem; ?>"/></figure>
                <h4 title="<?= $segundo->titulo; ?>"><?= $segundo->titulo; ?></h4>                
                <?= "<a title='Ler mais' href='artigo.php?acao=editar&id=" . $segundo->id . "'><button class='btn-submit'>Ler mais <i class='fa fa-chevron-circle-right' aria-hidden='true'></i></button></a>"; ?>
            <?php endforeach; ?>
        </div>
        <div class="post-ultimos-2">
            <?php foreach ($Artigo->PostTerceira() as $key => $terceiro): ?>
                <figure><img alt="<?= $terceiro->titulo; ?>" src="../app/public/uploads/<?= $terceiro->imagem; ?>"/></figure>
                <h4 title="<?= $terceiro->titulo; ?>"><?= $terceiro->titulo; ?></h4>                
                <?= "<a title='Ler mais' href='artigo.php?acao=editar&id=" . $terceiro->id . "'><button class='btn-submit'>Ler mais <i class='fa fa-chevron-circle-right' aria-hidden='true'></i></button></a>"; ?>
            <?php endforeach; ?>
        </div>
        <div class="clear"></div>
    </div>             
</article>
<!--FIM DO ARTIGO PRINCIPAL-->
<section class="container">
    <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
        <h1 title="<?= $resultado->keyword; ?>" class="fontzero"><?= $resultado->keyword; ?></h1>
    <?php endforeach; ?>
    <div class="content">
        <article class="canal-youtube">
            <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
                <h3> <b>Inscreva-se no nosso canal</b> para receber todos os vídeos <div class="g-ytsubscribe" data-channelid="<?= $resultado->canal; ?>" data-layout="default" data-count="default"></div></h3>
            <?php endforeach; ?>
        </article> 
        <div class="clear"></div>
    </div>
</section>
<!-- FIM PRINCIPAL POSTS -->
<section class="container gradiente-2" id="artigos">
    <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
        <h1 title="<?= $resultado->keyword; ?>" class="fontzero"><?= $resultado->keyword; ?></h1>
    <?php endforeach; ?>
    <div class="content">
        <?php foreach ($Artigo->PostOutros() as $key => $outros): ?>
            <article class="outros-posts">                    
                <header>
                    <figure><img  alt="<?= $outros->titulo; ?>" src="../app/public/uploads/<?= $outros->imagem; ?>"/></figure>
                </header>
                <footer>
                    <h4 title=""><?= $outros->titulo; ?></h4>
                    <?= "<a title='Ler mais' href='artigo.php?acao=editar&id=" . $outros->id . "'><button class='btn-submit'>Ler mais <i class='fa fa-chevron-circle-right' aria-hidden='true'></i></button></a>"; ?>
                    <!-- DEFAULT  <a title="" href="#"> <button class='btn-submit'>Ler mais <i class='fa fa-chevron-circle-right' aria-hidden='true'></i></button></a>-->
                </footer>
            </article>
        <?php endforeach; ?>
        <div class="clear"></div>
    </div>
</section>
<!-- FIM OUTROS POSTS -->
<section class="container sobre-mim" id="christian-de-ornellas">
    <div class="content">
        <figure><img alt="" src="images/eu.jpg"/></figure>

        <h2 title="Chrsitian de Ornellas">Christian de Ornellas</h2>
        <h3 title="Web Master e especialista em Marketing de Conversão">Web Master e especialista em Marketing de Conversão</h3>

        <p title=" Sou um eterno apaixonado por tecnologia, internet e marketing digital. Atuo a mais de 5 anos com desenvolvimento web e estratégias para encontrar trafego qualificado e gerar resultados na internet.">
            Sou um eterno apaixonado por <b>tecnologia, internet e marketing digital</b>. 
            Atuo a mais de 5 anos com <b>desenvolvimento web e estratégias</b> para encontrar
            <b>trafego qualificado e gerar resultados</b> na internet. 
        </p>
        <p title="Gosto de compartilhar minhas habilidades e experiências para ajudar outras
           pessoas e seus negócios através da internet. Sou também um grande apreciador de startups, empreendimentos
           e negócios online que tenha grande escala.">
            Gosto de compartilhar minhas <b>habilidades e experiências</b> para ajudar outras
            pessoas e seus negócios através da internet. Sou também um grande apreciador de <b>startups, empreendimentos
                e negócios online</b> que tenha grande escala.
        </p>
        <p title=" Nestes últimos anos a internet teve um impressionante crescimento, pois 
           com um pouco de determinação e muito conhecimento é possível vender qualquer produto ou serviço na 
           internet desde que você encontre o público correto e saiba se relacionar com eles.">
            Nestes últimos anos a internet teve um <b>impressionante crescimento,</b> pois 
            com um pouco de determinação e <b>muito conhecimento</b> é possível vender qualquer <b>produto ou serviço</b> na 
            internet desde que você encontre o <b>público correto</b> e saiba se relacionar com eles.
        </p>
        <p title="Então se você está querendo  montar um negócio escalável na internet ou impulsionar os resultados de sua empresa
           ou negócio na internet e sair da zona de conforto para seguir em novos desafios, você está no lugar certo.
           Cola comigo que eu vou te ajudar a impulsionar o seu negócio na internet. ">
            Então se você está querendo <b>montar um negócio escalável</b> na internet ou <b>impulsionar os resultados</b> de sua empresa
            ou negócio na internet e <b>sair da zona de conforto</b> para seguir em <b>novos desafios,</b> você está no lugar certo.
            Cola comigo que eu <b>vou te ajudar</b> a impulsionar o seu negócio na internet. 
        </p>
        <p title="Me siga nas redes sociais
           assine meu canal no Youtube, deixe seu e-mail na lista vip no topo do site para receber em primeira mão o nosso conteúdo.">
            Me siga nas <b>redes sociais</b>
            assine meu canal no Youtube, <b>deixe seu e-mail</b> na lista vip no topo do site para receber em primeira mão o nosso conteúdo.
        </p>

        <div class="clear"></div>
    </div>
</section>
<!-- FIM SOBRE-->
<section class="container frase bg-textura">
    <div class="content">
        <h3 title="Não é tolo quem dá o que não pode guardar para obter o que não pode perder!">
            <b>"</b>Não é tolo quem dá o que não pode guardar para obter o que não pode perder!<b>"</b>
        </h3>
        <div class="clear">
        </div>
    </div>
</section>
<!-- FIM FRASE-->
<section class="container na_rede">
    <div class="content">
        <h2 title="">Siga a Orientme nas mídias sociais</h2>
        <h3 title="">E receba as nossas sacadas sobre empreendedorismo e marketing digital</h3>
        <article class="box30">
            <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
                <h1 title="Facebook" class="fontzero">Facebook</h1>
                <i title="Facebook"class="fa fa-facebook" aria-hidden="true"></i>
                <div class="fb-page" data-width="340" data-height="360" data-href="<?= $resultado->facebook; ?>" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://<?= $resultado->facebook; ?>" class="fb-xfbml-parse-ignore">
                        <a href="https://<?= $resultado->facebook; ?>"><?= $resultado->facebook; ?></a>
                    </blockquote>
                <?php endforeach; ?>
            </div>
            <div id="fb-root"></div>
        </article>
        <article class="box30">
            <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
                <h1 title="Twitter" class="fontzero">Twitter</h1>
                <i title="Twitter" class="fa fa-twitter" aria-hidden="true"></i>
                <a class="twitter-timeline" data-width="340" data-height="360" data-link-color="#19CF86" href="<?= $resultado->twitter; ?>"><?= $resultado->twitter; ?></a>
            <?php endforeach; ?>
        </article>
        <article class="box30">
            <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
                <h1 title="Google plus" class="fontzero">Google plus</h1>
                <i title="Google" class="fa fa-google-plus" aria-hidden="true"></i>  
                <!-- Posicione esta tag onde você deseja que o widget apareça. -->
                <div class="g-page" data-width="340" data-href="//<?= $resultado->plus; ?>" data-rel="publisher"></div>
            <?php endforeach; ?>
        </article>
        <div class="clear"></div>
    </div>
</section>      
<!-- FIM MÍDIAS SOCIAIS-->
<?php require_once ('footer.php'); ?>