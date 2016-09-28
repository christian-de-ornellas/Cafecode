	<?php 
function __autoload($Class) {
    
    $dirName = 'controller';
    
    if(file_exists("{$dirName}/{$Class}.class.php")):
        require_once("{$dirName}/{$Class}.class.php");
    else:
        die("Erro ao incluir {$dirName}/{$Class}.class.php<hr>");
    endif;
}


?>
<?php require('model/Usuarios.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>CafeCode :: Acesso</title>
</head>
<body>
<style type="text/css">
	body{	
		background-image: url(public/img/bgg-02.png);
		background-color:#2c3e50;
		margin:0;
		padding: 0;	  
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
    	-moz-background-repeat: no-repeat;
    -moz-background-attachment: fixed;
    -moz-background-position: center; 
	}

.login{
	background-color: #2c3e50;

border: 4px solid #2c3e50;
padding: 2em;
display: inline-block;
text-align: center;
text-transform: uppercase;
margin-top: 10%;
margin-left: 30%;
color: #f2f2f2;

}
.login input{
	margin-bottom: 0.5em;
	width: 64%;
	padding: 1em;
	border: none;
	color: #2c3e50;	
}
.login input:hover{
	background-color: #eee;
	transition: all linear 1s; 

}
.login button{
	margin-bottom: 0.5em;
	width: 70%;
	padding: 1em;
	cursor: pointer;
	background-color: #16a085;
	border: none;
    font-weight: 800;
    color: #fff;
    text-align: center;
text-transform: uppercase;
}
.login button:hover{
	background-color: #1abc9c;
	transition: all linear 1s;


}

</style>
<main class="login">
<h3>administrador</h3>
	<div class="form">
		<form method="post">
			<input type="email" name="email" required title="E-mail" placeholder="Email...">
			<input type="password" name="senha" required title="Senha" placeholder="Palavra-chave...">
			<button type="submit" name="logar">LOGAR <?php if(isset($resp)){echo $resp;} ?></button>
		</form>
	</div>

</main>

</body>
</html>