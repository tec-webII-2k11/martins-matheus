<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Victor Martins e Matheus Tuma Faccin">
        <link rel="stylesheet" type="text/css" href="arquivo.css">
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
	<?php
	include "conecta.php";

	
	
	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$datanascimento=$_POST["datanascimento"];
	$sexo=$_POST["sexo"];
	$profissao=$_POST["profissao"];
	$telefone=$_POST["telefone"];
	$endereco=$_POST["endereco"];
	$cidade=$_POST["cidade"];
	$estado=$_POST["estado"];
	$cep=$_POST["cep"];
	$username=strip_tags($_POST["username"]);
	$senha=sha1(strip_tags($_POST['senha']));
	$confirma_senha=sha1(strip_tags($_POST['senha']));
	
	$erro = 0;
		
		if(empty($username) || strlen($username) < 4){
			echo "Você deve preencher o username com pelo menos 4 caracteres.<br />";
		$erro = 1;
		}
		
		if(empty($senha) || strlen($senha) < 5){
			echo "Você deve preencher a senha com pelo menos 5 caracteres.<br />";
		$erro = 1;
		}
		
		if($confirma_senha != $senha){
			echo "A confirmação de senha deve ser igual à senha digitada.<br />";
			$erro = 1;
		}
		
		if(empty($confirma_senha)){
			echo "Você deve preencher a confirmação de senha corretamente.<br />";
			$erro = 1;
		}
		
		if($erro == 0){
			echo "Nome: ".$nome."<br />";
			echo "email: ".$email."<br />";
			echo "Data de nascimento: ".$datanascimento."<br />";
			echo "Sexo: ".$sexo."<br />";
			echo "Profissão: ".$profissao."<br />";
			echo "Telefone: ".$telefone."<br />";
			echo "Endereço: ".$endereco."<br />";
			echo "Cidade: ".$cidade."<br />";
			echo "Estado: ".$estado."<br />";
			echo "CEP: ".$cep."<br />";
			echo "Username: ".$username."<br />";
			
			$resultado = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, datanascimento, sexo, profissao, telefone, endereco, cidade, estado, cep, username, senha) VALUES('".$nome."','".$email."','".$datanascimento."','".$sexo."','".$profissao."','".$telefone."','".$endereco."','".$cidade."','".$estado."','".$cep."','".$username."','".$senha."')") 
    		or die ("Não foi possível executar a SQL:".mysqli_error($conexao));
    		if($resultado == True){
    		   echo "<br/>Usuário inserido com sucesso!";
			 }
			else{
    		   echo "<br/>Erro na inserção";
			 }
			

    
		}
		 mysqli_close($conexao);
	?>	
</html>