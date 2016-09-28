<?php include ('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Configuracao.php'); ?> 	
<article class="container">
    <div class="content panel">
        <header>
            <p>Configurações do site</p>
        </header>
        <?php
        if ($Configuracao->Contar() > 0):
            // Formulario de atualização
            foreach ($Configuracao->Ultimo() as $key => $resultado):
                echo"<form method='post' enctype='multipart/form-data'>
            <label>
                <span>Logo/Marca:</span>
                <input type='file' class='form_input' name='logo' value='$resultado->logo' title='Envie seu logo em png.'>
            </label>
            <label>
                <span>Endereço do site:</span>
                <input type='text' class='form_input' name='site' value='$resultado->site'title='Coloque o endereço de seu site...' placeholder='Ex: www.orientme.com.br'>
            </label>
            <label>
                <span>Descrição do site:</span>
                <input type='text' class='form_input' name='descricao' value='$resultado->descricao' title='Escreva uma descrição para o site...' placeholder='Ex: Nós somos especialistas em desenvolvimento web e markeiting digital.'>
            </label>
            <label>
                <span>Palavras chaves por vírgulas:</span>
                <input type='text' class='form_input' name='keyword'  value='$resultado->keyword' title='Dê um nome para sua categoria...' placeholder='Ex: Web Design, Programador, Facebook Marketing, Google Adwords, YoutubeAds'>
            </label>
            <label>
                <span>Cor 1:</span>
                <input type='color' name='corprimaria' value='$resultado->corprimaria' title='Escolha a cor principal...'>   
                <span>Cor 2:</span>
                <input type='color' name='corsecundaria' value='$resultado->corsecundaria' title='Escolha a segunda cor...'>   
                <span>Cor da fonte:</span>
                <input type='color' name='corfonte' value='$resultado->corfonte' title='Cor das fontes'>                
            </label>
            <label>
                <span>Pixel do Facebook:</span>
                <textarea rows='8' class='form_input' name='pixelfb' title='Cole o pixel do facebook...' placeholder='Cole aqui o pixel do Facebook'>$resultado->pixelfb</textarea>
            </label>
            <label>
                <span>Id do canal no Youtube:</span>
                <input type='text' class='form_input' name='canal'value='$resultado->canal' title='Insira o id do seu canal do youtube...' placeholder='Ex: UCTJ_VgvZLL_Y6PLFNr1UMlA'>
            </label>
            <label>
                <span>Endereço do canal no Youtube:</span>
                <input type='text' class='form_input' name='youtube' value='$resultado->youtube'title='Cole o endereço do canal...' placeholder='Ex: https://www.youtube.com/channel/UCTJ_VgvZLL_Y6PLFNr1UMlA'>
            </label>

            <label>
                <span>Link do Facebook:</span>
                <input type='text' class='form_input' name='facebook' value='$resultado->facebook' title='coloque o endereço do seu facebook...' placeholder='Ex: 	https://www.facebook.com/Orientme'>
            </label>

            <label><span>Link do Instagram:</span>
                <input type='text' class='form_input' name='instagram' value='$resultado->instagram'title='Cole o endereço do instagram...' placeholder='Ex: https://www.instagram.com/orientme/'>
            </label>
            <label><span>Link do Google Plus:</span>
                <input type='text' class='form_input' name='plus'value='$resultado->plus' title='Cole o endereço do Google PLus...' placeholder='Ex: https://plus.google.com/107769344922020077317'>
            </label>

            <label><span>Link do Twitter:</span>
                <input type='text' class='form_input' name='twitter'value='$resultado->twitter' title='Cole o endereço do Twitter...' placeholder='Ex: https://twitter.com/HelloOrientme'>
                <input type='hidden' name='id' value='$resultado->id'>
            </label>

            <footer class='acoes'>
                <button type='submit' name='atualizar'><i class='fa fa-floppy-o' aria-hidden='true'></i>
                    Atualizar</button>
        </form>";
            endforeach;
        else:
            //Formulario de Cadastro
            echo"<form method='post' enctype='multipart/form-data'>
            <label>
                <span>Logo/Marca:</span>
                <input type='file' class='form_input' name='logo' title='Envie seu logo em png.'>
            </label>
            <label>
                <span>Endereço do site:</span>
                <input type='text' class='form_input' name='site' title='Coloque o endereço de seu site...' placeholder='Ex: www.orientme.com.br'>
            </label>
            <label>
                <span>Descrição do site:</span>
                <input type='text' class='form_input' name='descricao' title='Escreva uma descrição para o site...' placeholder='Ex: Nós somos especialistas em desenvolvimento web e markeiting digital.'>
            </label>
            <label>
                <span>Palavras chaves por vírgulas:</span>
                <input type='text' class='form_input' name='keyword' title='Dê um nome para sua categoria...' placeholder='Ex: Web Design, Programador, Facebook Marketing, Google Adwords, YoutubeAds'>
            </label>
            <label>
                <span>Cor 1:</span>
                <input type='color' name='corprimaria' title='Escolha a cor principal...'>   
                <span>Cor 2:</span>
                <input type='color' name='corsecundaria' title='Escolha a segunda cor...'>   
                <span>Cor da fonte:</span>
                <input type='color' name='corfonte' title='Cor das fontes'>                
            </label>
            <label>
                <span>Pixel do Facebook:</span>
                <textarea rows='8' class='form_input' name='pixelfb' title='Cole o pixel do facebook...' placeholder='Ex: (function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = '//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=1702987093254569';
                          fjs.parentNode.insertBefore(js, fjs);
                          }(document, 'script', 'facebook-jssdk'));'></textarea>
            </label>
            <label>
                <span>Id do canal no Youtube:</span>
                <input type='text' class='form_input' name='canal' title='Insira o id do seu canal do youtube...' placeholder='Ex: UCTJ_VgvZLL_Y6PLFNr1UMlA'>
            </label>
            <label>
                <span>Endereço do canal no Youtube:</span>
                <input type='text' class='form_input' name='youtube' title='Cole o endereço do canal...' placeholder='Ex: https://www.youtube.com/channel/UCTJ_VgvZLL_Y6PLFNr1UMlA'>
            </label>

            <label>
                <span>Link do Facebook:</span>
                <input type='text' class='form_input' name='facebook' title='coloque o endereço do seu facebook...' placeholder='Ex:   https://www.facebook.com/Orientme'>
            </label>

            <label><span>Link do Instagram:</span>
                <input type='text' class='form_input' name='instagram' title='Cole o endereço do instagram...' placeholder='Ex: https://www.instagram.com/orientme/'>
            </label>
            <label><span>Link do Google Plus:</span>
                <input type='text' class='form_input' name='plus' title='Cole o endereço do Google PLus...' placeholder='Ex: https://plus.google.com/107769344922020077317'>
            </label>

            <label><span>Link do Twitter:</span>
                <input type='text' class='form_input' name='twitter' title='Cole o endereço do Twitter...' placeholder='Ex: https://twitter.com/HelloOrientme'>
             
            </label>

            <footer class='acoes'>
                <button type='submit' name='save'><i class='fa fa-floppy-o' aria-hidden='true'></i>
                    Salvar</button>
        </form>";
        endif;
        ?>
        </footer>
        <div class="clear"></div>
    </div>
</article>
<?php require_once ('footer.php'); ?>