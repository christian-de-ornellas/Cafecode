<?php

// Aqui é realizado a instancia do controlador de Planos
$Categoria = new Categorias();
if (isset($_POST["SalvarCategoria"])):
    //Aqui eu pego a imagem
    $arquivo = $_FILES["capa"];
// Aqui eu levo até a classe abstrata crud e depois faço o tratamento do endereço com um novo nome de identificação.
    $extensao = $Categoria->pegarExtensao($arquivo["name"]);
// aqui eu resgato os valores do formulários, mas alguns valores 
// são padronizados como por exemplo o attribute e o op//
    $capa = $Categoria->gerarNome($extensao);
    $categoria = strip_tags(trim($_POST["categoria"]));
    $data_criada = date("d/m/Y");

//Aqui eu seto os Objetos
    $Categoria->setCapa($capa);
    $Categoria->setCategoria($categoria);
    $Categoria->setData_criada($data_criada);

// Aqui eu mando salvar os dados 
    if ($Categoria->insert()):
        if (move_uploaded_file($arquivo["tmp_name"], "../public/uploads/" . $capa)):
            echo"<script>alert('A categoria {$categoria} foi salva com sucesso.');</script>";
        else:
            echo"<script>alert('A categoria não foi publicada!');</script>";
        endif;
    endif;
endif;
// Aqui é resgatado o id pela get para deletar o registro
if (isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
    $id = (int) $_GET['id'];
    if ($Categoria->delete($id)) {
        echo"<script>alert('Deletado com sucesso!');</script>";
    }
endif;

// Aqui é resgatado o valor do id para a edição
if (isset($_GET['acao']) && $_GET['acao'] == 'editar'):
    $id = (int) $_GET['id'];
    $resultado = $Categoria->find($id);
endif;

// Aqui realiza o update 
if (isset($_POST["EditarCategoria"])):
    //Aqui eu pego a imagem
    $arquivo = $_FILES["capa"];
// Aqui eu levo até a classe abstrata crud e depois faço o tratamento do endereço com um novo nome de identificação.
    $extensao = $Categoria->pegarExtensao($arquivo["name"]);
// aqui eu resgato os valores do formulários, mas alguns valores 
// são padronizados como por exemplo o attribute e o op//
    $id = strip_tags(trim($_POST["id"]));
    // são padronizados como por exemplo o attribute e o op//
    $capa = $Categoria->gerarNome($extensao);
    $categoria = strip_tags(trim($_POST["categoria"]));
    $data_criada = date("d/m/Y");

//Aqui eu seto os Objetos
    $Categoria->setCapa($capa);
    $Categoria->setCategoria($categoria);
    $Categoria->setData_criada($data_criada);

// Aqui eu mando salvar os dados 
    if ($Categoria->update($id)):
        if (move_uploaded_file($arquivo["tmp_name"], "../public/uploads/" . $capa)):
            echo"<script>alert('A categoria {$categoria} foi atualizada.');</script>";
            header('Refresh: 0; url=categoria.php');
        else:
            echo"<script>alert('Error, a categoria {$categoria} não foi atualizada!');</script>";
        endif;
    endif;
endif;
