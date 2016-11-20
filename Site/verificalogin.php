<?php
    
    
    session_start();
	$usuario = strip_tags($_POST['nome']);
    $senha1 = sha1(strip_tags($_POST['senha']));
	echo $senha1."<br>";
    // conctando ao BD
    include "conecta.php";

	$query="SELECT * from usuarios WHERE  username=? AND senha=?";

	if($stmt = mysqli_prepare($conexao, $query)) {
		mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha1);	
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $nome, $email, $datanascimento, $sexo, $profissao, $telefone, $endereco, $cidade, $estado, $cep, $username, $senha);
		mysqli_stmt_fetch($stmt);
	  
		if ($usuario == $username && $senha1 == $senha) {
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] = $senha;
			header('location:index.php');
		}	  
		else {
			echo "Usuario ou senha incorretos";
		}
		mysqli_stmt_close($stmt);
	} else {
		echo "Falha no statment";
	}
	mysqli_close($conexao);
?>
