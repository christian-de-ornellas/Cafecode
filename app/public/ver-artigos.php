<?php require('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Artigos.php'); ?>  
<?php require_once('../model/Categorias.php'); ?>  
<article class="container">
    <div class="content panel">
        <header>
            <p><a href="ver-artigos"><i class="fa fa-book" aria-hidden="true"></i> TODOS ARTIGOS</p>
        </header>
        <table>
            <?php foreach ($Artigo->CategoriasArtigos() as $key => $verArtigos): ?>
                <tr>                
                    <td><img  src="uploads/<?= $verArtigos->imagem; ?>" width="50"></td>
                    <td><?= $verArtigos->titulo; ?></td>
                    <td><?= $verArtigos->categoria; ?></td>
                    <td><?= $verArtigos->data_criada; ?></td>
                    <td><?= "<a title='Editar artigo' href='edit-artigo.php?acao=editar&id=" . $verArtigos->id . "'><i class='fa fa-pencil-square' aria-hidden='true'></i></a>"; ?>  <?php echo "<a title='Excluir artigo' href='ver-artigos.php?acao=deletar&id=" . $verArtigos->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'><i class='fa fa-trash-o' aria-hidden='true'></i></a>"; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php //######### INICIO Paginação	$numreg = 40; // Quantos registros por página vai ser mostrado	if (!isset($pg)) {		$pg = 0;	}	$inicial = $pg * $numreg;	//######### FIM dados Paginação		// Faz o Select pegando o registro inicial até a quantidade de registros para página	$sql = mysql_query("SELECT * FROM tabela LIMIT $inicial, $numreg");	// Serve para contar quantos registros você tem na seua tabela para fazer a paginação	$sql_conta = mysql_query("SELECT * FROM tabela");		$quantreg = mysql_num_rows($sql_conta); // Quantidade de registros pra paginação		include("paginacao.php"); // Chama o arquivo que monta a paginação. ex: << anterior 1 2 3 4 5 próximo >>		echo "<br><br>"; // Vai servir só para dar uma linha de espaço entre a paginação e o conteúdo		while ($aux = mysql_fetch_array($sql)) {		/* Ai o resto é com voces em montar como deve parecer o conteúdo */	}?>
        <style type="text/css"><!--.pgoff {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #FF0000; text-decoration: none}a.pg {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #003366; text-decoration: none}a:hover.pg {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #0066cc; text-decoration:underline}--></style><?php	$quant_pg = ceil($quantreg/$numreg);	$quant_pg++;		// Verifica se esta na primeira página, se nao estiver ele libera o link para anterior	if ( $pg > 0) { 		echo "<a href=".$PHP_SELF."?pg=".($pg-1) ."class=pg><b>&laquo; anterior</b></a>";	} else { 		echo "<font color=#CCCCCC>&laquo; anterior</font>";	}		// Faz aparecer os numeros das página entre o ANTERIOR e PROXIMO	for($i_pg=1;$i_pg<$quant_pg;$i_pg++) { 		// Verifica se a página que o navegante esta e retira o link do número para identificar visualmente		if ($pg == ($i_pg-1)) { 			echo "&nbsp;<span class=pgoff>[$i_pg]</span>&nbsp;";		} else {			$i_pg2 = $i_pg-1;			echo "&nbsp;<a href=".$PHP_SELF."?pg=$i_pg2 class=pg><b>$i_pg</b></a>&nbsp;";		}	}		// Verifica se esta na ultima página, se nao estiver ele libera o link para próxima	if (($pg+2) < $quant_pg) { 		echo "<a href=".$PHP_SELF."?pg=".($pg+1)." class=pg><b>próximo &raquo;</b></a>";	} else { 		echo "<font color=#CCCCCC>próximo &raquo;</font>";	}?>
        <div class="clear"></div>
    </div>
</article>
<?php require('footer.php'); ?>