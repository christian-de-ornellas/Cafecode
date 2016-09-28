<?php require('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Usuarios.php'); ?>  
<article class="container">
    <div class="content panel">
        <header>
            <p><i class="fa fa-user" aria-hidden="true"></i> Criar Usuário</p>
        </header>
        <form method="post" enctype="multipart/form-data">           
            <label>
                <span>Nome:</span>
                <input type="text" class="form_input" name="nome" title="Dê um nome para o usuário..." placeholder="Ex: Christian...">
            </label>
            <label>
                <span>Perfil:</span>
                <select name="perfil" class="form_input">
                    <option value="">Escolha</option>
                    <option value="USER">Autor</option>
                    <option value="ADMIN">Administrador</option>
                </select>
            </label>
            <label>
                <span>E-mail:</span>
                <input type="email" class="form_input" name="email" title="Digite o e-mail para acesso..." placeholder="Ex: christian@orientme.com.br...">
            </label>
            <label>
                <span>Senha:</span>
                <input type="password" class="form_input" name="senha" title="Digite uma senha de segurança..." placeholder="Ex: Digite uma senha segura...">
            </label>
            <footer class="acoes">
                <button type="reset"><i class="fa fa-ban" aria-hidden="true"></i>
                    Limpar</button>
                <button type="submit" name="SalvarUsuario"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Salvar</button>
                <a title="Aqui você lista de todos usuários" href="ver-usuarios"><i class="fa fa-external-link" aria-hidden="true"></i>
                    Ver todos</a>
        </form>
        </footer>
        <div class="clear"></div>
    </div>
</article>
<?php require('footer.php'); ?>

