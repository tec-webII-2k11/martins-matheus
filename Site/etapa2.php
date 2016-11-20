		<?php
			$nome=strip_tags($_POST["nome"]);
			$email=strip_tags($_POST["email"]);
			$datanascimento=strip_tags($_POST["datanascimento"]);
			$sexo=strip_tags($_POST["sexo"]);
			$profissao=strip_tags($_POST["profissao"]);

			//validação
			$erro = 0;

				if(empty($nome) || strstr($nome, ' ')==FALSE){
					echo "Voce deve preencher o nome corretamente.<br>";
					$erro = 1;
				} 

				if(strlen($email) < 3 || strstr($email, '@')==FALSE){
					echo "Voce deve preencher o e-mail corretamente.<br>";
					$erro = 1;
				}

				if(empty($datanascimento) || strstr($datanascimento, '/')==FALSE) {
					echo "Voce deve preencher a data de nascimento corretamente. DD/MM/AAAA<br>";
					$erro = 1;
				}
				
				
				if(empty($profissao)) {
					echo "Voce deve preencher a profissao corretamente.<br>";
					$erro = 1;
				}
				
				if ($erro==0) {
					include 'etapa2a.php';
				}
		?>

