<?php

// Aqui é realizado a instancia do controlador de Planos
$Publicidade = new Publicidade();
if (isset($_POST["publicidade"])):
    //Aqui eu pego a imagem
    $arquivo = $_FILES["lateral"];
    //Aqui eu pego a imagem
    $arquivo_pri = $_FILES["feed"];
// Aqui eu levo até a classe abstrata crud e depois faço o tratamento do endereço com um novo nome de identificação.
    $extensao = $Publicidade->pegarExtensao($arquivo["name"]);
    $extensao = $Publicidade->pegarExtensao($arquivo_pri["name"]);
// aqui eu resgato os valores do formulários, mas alguns valores 
// são padronizados como por exemplo o attribute e o op//
    $lateral = $Publicidade->gerarNome($extensao);
    $feed = $Publicidade->gerarNome($extensao);
    $produto = strip_tags(trim($_POST["produto"]));
    $categoria_id = strip_tags(trim($_POST["categoria_id"]));
    $link = trim($_POST["link"]);
    $data_criada = date("d/m/Y");

//Aqui eu seto os Objetos
    $Publicidade->setLateral($lateral);
    $Publicidade->setFeed($feed);
    $Publicidade->setProduto($produto);
    $Publicidade->setCategoria_id($categoria_id);
    $Publicidade->setLink($link);
    $Publicidade->setData_criada($data_criada);

// Aqui eu mando salvar os dados 
    if ($Publicidade->insert()):
        if (move_uploaded_file($arquivo["tmp_name"], "../public/uploads/" . $lateral) && move_uploaded_file($arquivo_pri["tmp_name"], "../public/uploads/" . $feed)):
            echo"<script>alert('Salvo com sucesso.');</script>";
        else:
            echo"<script>alert('Não foi publicada!');</script>";
        endif;
    endif;
endif;

// Aqui é resgatado o id pela get para deletar o registro
if (isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
    $id = (int) $_GET['id'];
    if ($Publicidade->delete($id)) {
        echo"<script>alert('Deletado com sucesso!');</script>";
        header('Refresh: 0; url=ver-publicidades.php');
    }
endif;