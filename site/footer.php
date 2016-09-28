<nav class="container main_footer">
    <div class="content">
        <h1 class="fontzero">Venda mais na internet</h1>
        <ul class="nav_footer">
            <li><a title="" href="#christian-de-ornellas">Sobre</a></li>
            <li><a title="" href="#artigos">Artigos</a></li>
            <li><a title="" href="#">Marketing Digital</a></li>
            <li><a title="" href="#">Vendas</a></li>
            <li><a title="" href="#">Tecnologia</a></li>                                      
        </ul> 
        <ul class="rede">
            <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
                <li><a title="Curta nossa Fan Page" target="_blank" href="//<?= $resultado->facebook; ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li><a title="Assine o nosso Canal" target="_blank" href="//www.youtube.com/channel/<?= $resultado->canal; ?>/videos"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a title="Nos siga no Instagram" target="_blank" href="//<?= $resultado->instagram; ?>/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a title="Acesse nosso Google Plus" target="_blank" href="//<?= $resultado->plus; ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
            <?php endforeach; ?>
        </ul>              
        <div class="clear"></div>
    </div>
</nav>
</main>
<footer class="container footer">
    <div class="content">    
        <?php foreach ($Configuracao->Ultimo() as $key => $resultado): ?>
            <div class="box40"><img alt="Impulsionando o seu negócio" src="../app/public/uploads/<?= $resultado->logo; ?>" width="150"></div>
        <?php endforeach; ?>
        <div class="box40">
            <ul class="legal">
                <li><a href="termos" target="_blank">Termos de uso</a></li>
                <li><a href="politica" target="_blank">Política de privacidade</a></li>                        
                <li><a href="aviso" target="_blank">Aviso Legal</a></li>                        
            </ul>                    
        </div>
        <div class="copy">
            <p title="Desenvolvido no estado da arte por Christian de Ornellas Possidonio"> Copyright © <?php
                $y = date('Y');
                echo $y
                ?> Orientme - Todos os direitos reservados.</p>
        </div>
        <div class="clear"></div>
    </div>
</footer>
<!-- SHARE PARA COMPARTILHAR ARTIGO NAS REDES SOCIAIS -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57bf7b0ec041c6c9"></script>
<script src="https://apis.google.com/js/platform.js"></script>
<script src="js/custom.js"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
<script src="https://apis.google.com/js/platform.js" async defer>
    {
        lang: 'pt-BR'
    }
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</body>    
</html>
