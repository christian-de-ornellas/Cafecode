<?php require('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Artigos.php'); ?>  
<article class="container">
    <div class="content panel">
        <header>
            <hgroup> 
                <h2 class="fontzero" title="Categorias de Receitas" alt="[Categorias de Receitas]">Atualizar categoria</h2>
                <h3 title="Aqui você precisa inserir as categorias corretas para site." alt="[Aqui você precisa inserir as categorias corretas para site.]" >Editar artigo</h3> 
            </hgroup>
        </header>
        <form method="post" enctype="multipart/form-data">
            <label>
                <span>Imagem principal: <?=$resultado->imagem; ?></span>
                <input type="file" class="form_input" name="imagem" value="<?=$resultado->imagem; ?>" />
            </label>
            <label>
                <span>Título:</span>
                <input type="text" class="form_input" name="titulo" placeholder="Título"value="<?= $resultado->titulo; ?>" />
            </label>
            <label>
                <span>Código de incorporação do vídeo:</span>
                <input type="text" class="form_input" name="video" placeholder="Ex: <iframe width='854' height='480' src='https://www.youtube.com/embed/Uv0_TU5zQyc' frameborder='0' allowfullscreen></iframe>" value='<?php echo $resultado->video; ?>' />
            </label>
            <label>
                <span>Categoria:</span>
                <select name="categoria_id" class="form_input">
                    <option value="0"></option>
                    <?php foreach ($Categoria->findAll() as $key => $cate): ?>
                        <option value="<?= $cate->id; ?>"><?= $cate->categoria; ?></option>
                    <?php endforeach; ?>
                </select>
            </label>
            <span>Texto:</span>
            <textarea name="texto"><?= $resultado->texto; ?></textarea>
            <footer>
                <div class = "acoes">
                    <input type="hidden" name="id" value="<?= $resultado->id; ?>">
                    <button type = "submit" name = "update"><i class = "fa fa-floppy-o" aria-hidden = "true"></i> Atualizar</button>
                </div>
        </form>
        </footer>
        <div class="clear"></div>
    </div>
</article>
<?php require('footer.php'); ?>