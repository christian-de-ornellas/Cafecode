<?php require('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Categorias.php'); ?>  
<article class="container">
    <div class="content panel">
        <header>
            <hgroup> 
                <h2 class="fontzero" title="Categorias de Receitas" alt="[Categorias de Receitas]">Atualizar categoria</h2>
                <h3 title="Aqui você precisa inserir as categorias corretas para site." alt="[Aqui você precisa inserir as categorias corretas para site.]" >Editar categoria</h3> 
            </hgroup>
        </header>
        <form method="post" enctype="multipart/form-data">
            <label>
                <span>Capa atual: <?php echo $resultado->capa; ?></span>
                <input type="file" class="form_input" name="capa" value="<?php echo $resultado->capa; ?>" title="Envie uma foto para sua categoria.">
            </label>
            <label>
                <input type = "text" class = "form_input" name="categoria" value="<?php echo $resultado->categoria; ?>"/>
            </label>
            <input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
            <footer>
                <div class = "acoes">
                    <button type = "submit" name = "EditarCategoria"><i class = "fa fa-floppy-o" aria-hidden = "true"></i> Atualizar</button>
                </div>
        </form>
        </footer>
        <div class="clear"></div>
    </div>
</article>
<?php require('footer.php'); ?>