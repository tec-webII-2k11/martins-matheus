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
		<h1>Cadastramento - Etapa 2 de 3</h1> 
		<form method="POST" action="etapa3.php"> 
			<fieldset>
				<input type="hidden" name="nome" value="<?php echo $nome; ?>"> 
				<input type="hidden" name="email" value="<?php echo $email; ?>"> 
				<input type="hidden" name="datanascimento" value="<?php echo $datanascimento; ?>"> 
				<input type="hidden" name="sexo" value="<?php echo $sexo; ?>"> 
				<input type="hidden" name="profissao" value="<?php echo $profissao; ?>"> 
				
				<p><label for="telefone">Telefone: </label><input type="text" name="telefone" id="telefone" size="20"></p> 
				<p><label for="endereco">Endereco: </label><input type="text" name="endereco" id="endereco" size="20"></p> 
				<p><label for="cidade">Cidade: </label><input type="text" name="cidade" id="cidade" size="20">&nbsp;&nbsp;&nbsp; 
					<label for="estado">Estado: </label><input type="text" name="estado" id="estado" size="2"></p> 
				<p><label for="cep">CEP: </label><input type="text" name="cep" id="cep" size="9"></p> 
				<p><input type="submit" value="Prosseguir &gt;&gt;" name="prosseguir"></p> 
			</fieldset>
		</form>
		<footer>
            <?php
                include "footer.php";
            ?>
        </footer>
	</body> 
</html> 