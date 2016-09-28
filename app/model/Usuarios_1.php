<?php ob_start();
if (isset($_POST["logar"])):
session_start();
    $Usuario = new Usuarios();
    //Aqui resgatamos as variaves
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    //Criptografand
    $senha = md5($senha);

    //Inicia as variaveis
    $Usuario->setEmail($email);
    $Usuario->setSenha($senha);

    if ($Usuario->Logar() == 1):

        $row = $Usuario->Sessao($email, $senha);

        $_SESSION["email"] = $row->email;
        $_SESSION["perfil"] = $row->perfil;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["id"] = $row->id;
        $resp = "<img src='public/icons/animado/facebook.gif' style=' float: right; position: absolute; width: 18px;' />";
        header('Refresh: 3; url=public/panel.php');
    else:
        echo"<script>alert('Opps, E-mail ou Senha errada!');</script>";
        header('Refresh: 0; url=entrar.php');
       
    endif;
endif;
// Aqui acontece a instancia do objeto
$Usuario = new Usuarios();

//Aqui acontece o cadastro caso seja solicitado pelo visitante
if (isset($_POST["cadastrar"])):
    //Aqui acontece o resgate das variaveis
    $nome = strip_tags(trim($_POST["nome"]));
    $email = strip_tags(trim($_POST["email"]));
    $senha = strip_tags(md5($_POST["senha"]));
    $perfil = "USER";
    $data_criada = date("d/m/Y");
    // Aqui setamos as variaveis
    $Usuario->setNome($nome);
    $Usuario->setEmail($email);
    $Usuario->setSenha($senha);
    $Usuario->setPerfil($perfil);
    $Usuario->setData_criada($data_criada);

    if ($Usuario->insert()):
        echo"<script>alert('Parabéns {$nome} você foi cadastrado com sucesso.');</script>";
        header('Refresh: 0; url=entrar.php');
    else:
        echo"<script>alert('Ops, {$nome} não foi cadastrado, tente mais tarde por favor!');</script>";
    endif;
endif;
//Aqui acontece o cadastro caso seja solicitado pelo visitante
if (isset($_POST["save-usuarios"])):
    //Aqui acontece o resgate das variaveis
    $nome = strip_tags(trim($_POST["nome"]));
    $email = strip_tags(trim($_POST["email"]));
    $senha = strip_tags(md5($_POST["senha"]));
    $perfil = strip_tags(trim($_POST["perfil"]));
    $data_criada = date("d/m/Y");
    // Aqui setamos as variaveis
    $Usuario->setNome($nome);
    $Usuario->setEmail($email);
    $Usuario->setSenha($senha);
    $Usuario->setPerfil($perfil);
    $Usuario->setData_criada($data_criada);

    if ($Usuario->insert()):
        echo"<script>alert('Parabéns {$nome} você foi cadastrado com sucesso.');</script>";
        header('Refresh: 1; url=usuarios.php');
    else:
        echo"<script>alert('Ops, {$nome} não foi cadastrado, tente mais tarde por favor!');</script>";
    endif;
endif;

// Aqui é resgatado o id pela get para deletar o registro
if (isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
    $id = (int) $_GET['id'];
    if ($Usuario->delete($id)) {
        echo"<script>alert('Deletado com sucesso!');</script>";
        header('Refresh: 1; url=usuarios.php');
    }
endif;

// Aqui é resgatado o valor do id para a edição
if (isset($_GET['acao']) && $_GET['acao'] == 'editar'):
    $id = (int) $_GET['id'];
    $resultado = $Usuario->find($id);
endif;

// Aqui realiza o update
if (isset($_POST["atualizar"])):
    // aqui eu resgato os valores do formulários, mas alguns valores
    // são padronizados como por exemplo o attribute e o op//
    $id = strip_tags(trim($_POST["id"]));
    $nome = strip_tags(trim($_POST["nome"]));
    $email = strip_tags(trim($_POST["email"]));
    $perfil = strip_tags(trim($_POST["perfil"]));
    $senha = strip_tags(md5($_POST["senha"]));
    $data_criada = date("d/m/Y");

    //Aqui eu seto os Objetos
    $Usuario->setNome($nome);
    $Usuario->setEmail($email);
    $Usuario->setPerfil($perfil);
    $Usuario->setSenha($senha);
    $Usuario->setData_criada($data_criada);

    // Aqui eu mando salvar os dados
    if ($Usuario->update($id)):
        echo"<script>alert('Atualizado com sucesso.');</script>";
        header('Refresh: 0; url=usuarios.php');
    else:
        echo"<script>alert('Error!');</script>";
        header('Refresh: 0; url=edit-usuarios.php');
    endif;
endif;