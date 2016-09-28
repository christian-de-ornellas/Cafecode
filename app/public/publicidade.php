<?php require('header.php'); ?>
<?php require_once ('../controller/Config.inc.php'); ?>
<?php require_once ('../model/Publicidade.php'); ?>
<?php require_once ('../model/Categorias.php'); ?>
<article class="container">
    <div class="content panel">
        <header>
            <p><i class="fa fa-briefcase" aria-hidden="true"></i> Criar Publicidade</p>
        </header>
        <form method="post" enctype="multipart/form-data">
            <label>
                <span>Lateral:</span>
                <input type="file" title="Está imagem precisa ter 400 x 300px" class="form_input" name="lateral">
            </label>
            <label>
                <span>Feed:</span>
                <input type="file" title="Está imagem precisa ter 900 x 300px" class="form_input" name="feed">
            </label>

            <label>
                <span>Produto:</span>
                <input type="text" class="form_input" name="produto" placeholder="Produto">
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
            <label>
                <span>Redirecionamento:</span>
                <input type="text" class="form_input" name="link" placeholder="www.seudominio.com.br">
            </label>

            <footer class="acoes">
                <button type="reset" name=""><i class="fa fa-ban" aria-hidden="true"></i>
                    Limpar</button>
                <button type="submit" name="publicidade"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Salvar</button>
                <a title="Aqui você lista todas as publicidades" href="ver-publicidades.php"><i class="fa fa-external-link" aria-hidden="true"></i>
                    Ver todos</a>
        </form>
        </footer>
        <div class="clear"></div>
    </div>
</article>


<?php require('footer.php'); ?>

