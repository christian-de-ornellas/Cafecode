<?php require('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Publicidade.php'); ?>  
<?php require_once('../model/Categorias.php'); ?>  
<article class="container">
    <div class="content panel">
        <header>
            <p><i class="fa fa-book" aria-hidden="true"></i> TODAS PUBLICIDADES</p>
        </header>
        <table>
            <?php foreach ($Publicidade->CategoriasPublicidade() as $key => $verPublicidade): ?>
                <tr>                
                    <td><img  src="uploads/<?= $verPublicidade->lateral; ?>" width="50"></td>
                    <td><img  src="uploads/<?= $verPublicidade->feed; ?>" width="50"></td>
                    <td><?= $verPublicidade->produto; ?></td>
                    <td><?= $verPublicidade->categoria; ?></td>
                    <td><?= $verPublicidade->link; ?></td>
                    <td><?= $verPublicidade->data_criada; ?></td>
                    <td><?= "<a title='Editar artigo' href='edit-publicidade.php?acao=editar&id=" . $verPublicidade->id . "'><i class='fa fa-pencil-square' aria-hidden='true'></i></a>"; ?>  <?php echo "<a title='Excluir publicidade' href='ver-publicidades.php?acao=deletar&id=" . $verPublicidade->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'><i class='fa fa-trash-o' aria-hidden='true'></i></a>"; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="clear"></div>
    </div>
</article>
<?php require('footer.php'); ?>