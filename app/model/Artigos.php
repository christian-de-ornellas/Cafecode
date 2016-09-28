<?php

// Aqui é realizado a instancia do controlador de Planos
$Artigo = new Artigos();
$Categoria = new Categorias();
if (isset($_POST["publicar"])):
    //Aqui eu pego a imagem
    $arquivo = $_FILES["imagem"];
// Aqui eu levo até a classe abstrata crud e depois faço o tratamento do endereço com um novo nome de identificação.
    $extensao = $Artigo->pegarExtensao($arquivo["name"]);
// aqui eu resgato os valores do formulários, mas alguns valores 
// são padronizados como por exemplo o attribute e o op//
    $imagem = $Artigo->gerarNome($extensao);
    $titulo = strip_tags(trim($_POST["titulo"]));
    $video = $_POST["video"];
    $categoria_id = strip_tags(trim($_POST["categoria_id"]));
    $texto = $_POST["texto"];
    $data_criada = date("d/m/Y");

//Aqui eu seto os Objetos
    $Artigo->setImagem($imagem);
    $Artigo->setTitulo($titulo);
    $Artigo->setVideo($video);
    $Artigo->setCategoria_id($categoria_id);
    $Artigo->setTexto($texto);
    $Artigo->setData_criada($data_criada);

// Aqui eu mando salvar os dados 
    if ($Artigo->insert()):
        if (move_uploaded_file($arquivo["tmp_name"], "../public/uploads/" . $imagem)):
            echo"<script>alert('Salvo com sucesso.');</script>";
        else:
            echo"<script>alert('Não foi publicada!');</script>";
        endif;
    endif;
endif;

// Aqui é resgatado o id pela get para deletar o registro
if (isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
    $id = (int) $_GET['id'];
    if ($Artigo->delete($id)) {
        echo"<script>alert('Deletado com sucesso!');</script>";
        header('Refresh: 0; url=ver-artigos.php');
    }
endif;

//Atualizar Artigo
function selected($value, $selected) {
    return $value == $selected ? ' selected="selected"' : '';
}

// Aqui é resgatado o valor do id para a edição
if (isset($_GET['acao']) && $_GET['acao'] == 'editar'):
    $id = (int) $_GET['id'];
    $resultado = $Artigo->find($id);
endif;

//EDITA 
if (isset($_POST["update"])):
    //Aqui eu pego a imagem
    $arquivo = $_FILES["imagem"];
// Aqui eu levo até a classe abstrata crud e depois faço o tratamento do endereço com um novo nome de identificação.

    $extensao = $Artigo->pegarExtensao($arquivo["name"]);
// aqui eu resgato os valores do formulários, mas alguns valores 
// são padronizados como por exemplo o attribute e o op//
    $imagem = $Artigo->gerarNome($extensao);
    $titulo = strip_tags(trim($_POST["titulo"]));
    $video = $_POST["video"];
    $categoria_id = strip_tags(trim($_POST["categoria_id"]));
    $texto = $_POST["texto"];
    $data_criada = date("d/m/Y");

//Aqui eu seto os Objetos
    $Artigo->setImagem($imagem);
    $Artigo->setTitulo($titulo);
    $Artigo->setVideo($video);
    $Artigo->setCategoria_id($categoria_id);
    $Artigo->setTexto($texto);
    $Artigo->setData_criada($data_criada);

// Aqui eu mando salvar os dados 
    if ($Artigo->update($id)):
        if (move_uploaded_file($arquivo["tmp_name"], "../public/uploads/" . $imagem)):
            echo"<script>alert('Atualizado com sucesso.');</script>";
        else:
            echo"<script>alert('Não foi atualizado!');</script>";
        endif;
    endif;
endif;