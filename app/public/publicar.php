<?php require('header.php'); ?>
<?php require_once ('../controller/Config.inc.php'); ?>
<?php require_once ('../model/Artigos.php'); ?>
<?php require_once ('../model/Categorias.php'); ?>
<article class="container">
    <div class="content panel">
        <header>
            <p><i class="fa fa-book" aria-hidden="true"></i> Criar artigo</p>
        </header>
        <form method="post" enctype="multipart/form-data">          
            <label>
                <span>Imagem principal:</span>
                <input type="file" class="form_input" name="imagem">
            </label>
            <label>
                <span>Título:</span>
                <input type="text" class="form_input" name="titulo" placeholder="Título">
            </label>
            <label>
                <span>Código de incorporação do vídeo:</span>
                <input type="text" class="form_input" name="video" placeholder="Ex: <iframe width='854' height='480' src='https://www.youtube.com/embed/Uv0_TU5zQyc' frameborder='0' allowfullscreen></iframe>">
            </label>
            <label>
                <span>Categoria:</span>
                <select name="categoria_id" class="form_input">
                    <option value="0"></option>
                    <?php foreach ($Categoria->findAll() as $key => $cat): ?>
                        <option value="<?= $cat->id; ?>"><?= $cat->categoria; ?></option>
                    <?php endforeach; ?>
                </select>
            </label>
            <span>Texto:</span>
            <textarea name="texto"></textarea>
            <footer class="acoes">
                <button type="reset" ><i class="fa fa-ban" aria-hidden="true"></i>
                    Limpar</button>
                <button type="submit" name="publicar"><i class="fa fa-share" aria-hidden="true"></i>
                    Publicar</button>
                <a title="Aqui você lista todas publicações" href="ver-artigos.php"><i class="fa fa-external-link" aria-hidden="true"></i>
                    Ver todos</a>
        </form>
        </footer>
        <div class="clear"></div>
    </div>
</article>
<?php require('footer.php'); ?>

