<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Victor Martins e Matheus Tuma Faccin">
        <link rel="stylesheet" type="text/css" href="arquivo.css">
        <style>
			form, h1 {text-align:center;}
			fieldset {margin:auto; width:380px;}
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
		<h1>Cadastramento - Etapa 1 de 3</h1>
		
		<form method="POST" action="etapa2.php"> 
			<fieldset>
				<p><label for="nome">Nome: </label><input type="text" name="nome" id="nome" size="20"></p>
				<p><label for="email">E-mail: </label><input type="email" name="email" id="email" size="20"></p> 
				<p><label for="datanascimento">Data de nascimento: </label><input type="text" name="datanascimento" id="datanascimento" size="20"></p> 
				<p>Sexo: 
					<input type="radio" value="masculino" checked name="sexo" id="masculino"><label for="masculino">Masculino</label>&nbsp;&nbsp; 
					<input type="radio" name="sexo" value="feminino" id="feminino"><label for="feminino">Feminino</label>
				</p> 
				<p><label for="profissao">Profissão: </label><input type="text" name="profissao" id="profissao" size="20"></p> 
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
