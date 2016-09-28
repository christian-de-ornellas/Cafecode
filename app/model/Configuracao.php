<?php

$Configuracao = new Configuracao;
// Aqui realiza o update 
if (isset($_POST["save"])):
    //Aqui eu pego a imagem
    $arquivo = $_FILES["logo"];
// Aqui eu levo até a classe abstrata crud e depois faço o tratamento do endereço com um novo nome de identificação.
    $extensao = $Configuracao->pegarExtensao($arquivo["name"]);

    $logo = $Configuracao->gerarNome($extensao);
    $site = strip_tags(trim($_POST["site"]));
    $descricao = strip_tags(trim($_POST["descricao"]));
    $keyword = strip_tags(trim($_POST["keyword"]));
    $corprimaria = strip_tags(trim($_POST["corprimaria"]));
    $corsecundaria = strip_tags(trim($_POST["corsecundaria"]));
    $corfonte = strip_tags(trim($_POST["corfonte"]));
    $pixelfb = trim($_POST["pixelfb"]);
    $canal = trim($_POST["canal"]);
    $youtube = strip_tags(trim($_POST["youtube"]));
    $facebook = strip_tags(trim($_POST["facebook"]));
    $instagram = strip_tags(trim($_POST["instagram"]));
    $plus = strip_tags(trim($_POST["plus"]));
    $twitter = strip_tags(trim($_POST["twitter"]));

//Aqui eu seto os Objetos
    $Configuracao->setLogo($logo);
    $Configuracao->setSite($site);
    $Configuracao->setDescricao($descricao);
    $Configuracao->setKeyword($keyword);
    $Configuracao->setCorprimaria($corprimaria);
    $Configuracao->setCorsecundaria($corsecundaria);
    $Configuracao->setCorfonte($corfonte);
    $Configuracao->setPixelfb($pixelfb);
    $Configuracao->setCanal($canal);
    $Configuracao->setYoutube($youtube);
    $Configuracao->setFacebook($facebook);
    $Configuracao->setInstagram($instagram);
    $Configuracao->setPlus($plus);
    $Configuracao->setTwitter($twitter);


// Aqui eu mando salvar os dados 
    if ($Configuracao->insert()):
        if (move_uploaded_file($arquivo["tmp_name"], "../public/uploads/" . $logo)):
            echo"<script>alert('Salvo com sucesso');</script>";
            header('Refresh: 0; url=configuracao.php');
        else:
            echo"<script>alert('Error, a configuração não foi salva!');</script>";
        endif;
    endif;
endif;

// Aqui realiza o update 
if (isset($_POST["atualizar"])):
    //Aqui eu pego a imagem
    $arquivo = $_FILES["logo"];
// Aqui eu levo até a classe abstrata crud e depois faço o tratamento do endereço com um novo nome de identificação.
    $extensao = $Configuracao->pegarExtensao($arquivo["name"]);
// aqui eu resgato os valores do formulários, mas alguns valores 
// são padronizados como por exemplo o attribute e o op//
    $id = strip_tags(trim($_POST["id"]));
    // são padronizados como por exemplo o attribute e o op//
    $logo = $Configuracao->gerarNome($extensao);
    $site = strip_tags(trim($_POST["site"]));
    $descricao = strip_tags(trim($_POST["descricao"]));
    $keyword = strip_tags(trim($_POST["keyword"]));
    $corprimaria = $_POST["corprimaria"];
    $corsecundaria = $_POST["corsecundaria"];
    $corfonte = $_POST["corfonte"];
    $pixelfb = trim($_POST["pixelfb"]);
    $canal = trim($_POST["canal"]);
    $youtube = strip_tags(trim($_POST["youtube"]));
    $facebook = strip_tags(trim($_POST["facebook"]));
    $instagram = strip_tags(trim($_POST["instagram"]));
    $plus = strip_tags(trim($_POST["plus"]));
    $twitter = strip_tags(trim($_POST["twitter"]));

//Aqui eu seto os Objetos
    $Configuracao->setLogo($logo);
    $Configuracao->setSite($site);
    $Configuracao->setDescricao($descricao);
    $Configuracao->setKeyword($keyword);
    $Configuracao->setCorprimaria($corprimaria);
    $Configuracao->setCorsecundaria($corsecundaria);
    $Configuracao->setCorfonte($corfonte);
    $Configuracao->setPixelfb($pixelfb);
    $Configuracao->setCanal($canal);
    $Configuracao->setYoutube($youtube);
    $Configuracao->setFacebook($facebook);
    $Configuracao->setInstagram($instagram);
    $Configuracao->setPlus($plus);
    $Configuracao->setTwitter($twitter);
// Aqui eu mando salvar os dados 
    if ($Configuracao->update($id)):
        if (move_uploaded_file($arquivo["tmp_name"], "../public/uploads/" . $logo)):
            echo"<script>alert('Salvo com sucesso');</script>";
            header('Refresh: 0; url=configuracao');
        else:
            echo"<script>alert('Sem alteração no logo!');</script>";
        endif;
    endif;
endif;