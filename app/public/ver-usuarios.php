<?php require('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Usuarios.php'); ?>   
<article class="container">
    <div class="content panel">
        <header>
            <p><i class="fa fa-users" aria-hidden="true"></i> TODOS USUÁRIOS</p>
        </header>
        <table>
            <?php foreach ($Usuario->findAll() as $key => $verUsuario): ?>
                <tr>                
                    <td><?= $verUsuario->nome; ?></td>
                    <td><?= $verUsuario->email; ?></td>
                    <td><?= $verUsuario->perfil; ?></td>
                    <td><?= $verUsuario->data_criada; ?></td>
                    <td><?= "<a title='Editar usuário' href='edit-usuario.php?acao=editar&id=" . $verUsuario->id . "'><i class='fa fa-pencil-square' aria-hidden='true'></i></a>"; ?>  <?php echo "<a title='Excluir publicidade' href='ver-usuarios.php?acao=deletar&id=" . $verUsuario->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'><i class='fa fa-trash-o' aria-hidden='true'></i></a>"; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="clear"></div>
    </div>
</article>
<?php require('footer.php'); ?>