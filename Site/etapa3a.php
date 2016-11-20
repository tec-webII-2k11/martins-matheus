<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Victor Martins e Matheus Tuma Faccin">
        <link rel="stylesheet" type="text/css" href="arquivo.css">
        <style>
			form, h1 {text-align:center;}
			fieldset {margin:auto; width:280px;}
		</style>
        <title>Homem de Ferro</title>
    </head>
    <body>
        <?php
            include "js.php";
        ?>
        <header>
             <?php
            include "menu.php";
        ?>
           
        </header>
		<h1>Cadastramento - Etapa 3 de 3</h1>

		<form method="POST" action="cadastra.php"> 
			<fieldset>
				<input type="hidden" name="nome" value="<?php echo $nome; ?>"> 
				<input type="hidden" name="email" value="<?php echo $email; ?>"> 
				<input type="hidden" name="datanascimento" value="<?php echo $datanascimento; ?>"> 
				<input type="hidden" name="sexo" value="<?php echo $sexo; ?>"> 
				<input type="hidden" name="profissao" value="<?php echo $profissao; ?>"> 
				<input type="hidden" name="telefone" value="<?php echo $telefone; ?>"> 
				<input type="hidden" name="endereco" value="<?php echo $endereco; ?>"> 
				<input type="hidden" name="cidade" value="<?php echo $cidade; ?>"> 
				<input type="hidden" name="estado" value="<?php echo $estado; ?>"> 
				<input type="hidden" name="cep" value="<?php echo $cep; ?>"> 

				<p><label for="username">Username: </label><input type="text" name="username" id="username" size="10"></p> 
				<p><label for="senha">Senha: </label><input type="password" name="senha" id="senha" size="10"></p> 
				<p><label for="confirma_senha">Confirme sua Senha: </label><input type="password" name="confirma_senha" id="confirma_senha" size="10"></p> 
				<p><input type="submit" value="Finalizar Cadastro" name="fim"></p> 
			</fieldset>
		</form>
		<footer>
            <?php
                include "footer.php";
            ?>
        </footer>
	</body> 
</html>