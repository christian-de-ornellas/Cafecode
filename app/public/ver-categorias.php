<?php require('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Categorias.php'); ?>  
<article class="container">
    <div class="content panel">
        <header>
            <p><i class="fa fa-list-alt" aria-hidden="true"></i> TODAS CATEGORIAS</p>
        </header>
        <?php foreach ($Categoria->findAll() as $key => $cat): ?>
            <div class="box25">            
                <figure><img title="<?= $cat->categoria; ?>"  alt="<?= $cat->categoria; ?>]" src="uploads/<?= $cat->capa; ?>"></figure>
                <h3 title="<?= $cat->categoria; ?>"><?= $cat->categoria; ?>  <?php echo "<a href='edit-categoria.php?acao=editar&id=" . $cat->id . "'><i class='fa fa-pencil-square' aria-hidden='true'></i></a>"; ?>  <?php echo "<a href='ver-categorias.php?acao=deletar&id=" . $cat->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'><i class='fa fa-trash-o' aria-hidden='true'></i></a>"; ?></h3>               
            </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    </div>
</article>
<?php require('footer.php'); ?>