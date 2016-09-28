<?php require('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Categorias.php'); ?>  
<article class="container">
    <div class="content panel">
        <header>
            <p><i class="fa fa-list-alt" aria-hidden="true"></i> Criar Categorias</p>
        </header>
        <form method="post" enctype="multipart/form-data">
            <label>
                <span>Capa:</span>
                <input type="file" class="form_input" name="capa"  title="Envie uma foto para sua categoria.">
            </label>
            <label>
                <span>Categoria:</span>
                <input type="text" class="form_input" name="categoria" title="Dê um nome para sua categoria..." placeholder="Ex: Tecnologia...">
            </label>
            <footer class="acoes">
                <button type="reset"><i class="fa fa-ban" aria-hidden="true"></i>
                    Limpar</button>
                <button type="submit" name="SalvarCategoria"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Salvar</button>
                <a title="Aqui você lista todas categorias" href="ver-categorias.php"><i class="fa fa-external-link" aria-hidden="true"></i>
                    Ver todos</a>
        </form>
        </footer>
        <div class="clear"></div>
    </div>
</article>
<?php require('footer.php'); ?>

