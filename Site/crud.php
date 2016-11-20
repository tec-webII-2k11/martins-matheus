<!DOCTYPE html>
<html>
    <head>
        <style>
			form, h1 {text-align:center;}
			fieldset {margin:auto; width:380px;}
		</style>
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
        session_start();
        if((isset ($_SESSION['usuario']) == true) and (isset ($_SESSION['senha']) == true)) {
            $logado = $_SESSION['usuario'];
            echo "<br><h2>Bem vindo ".$logado."!</h2><br><center><a href='logout.php'>Logout</a></center>";
            include "verificaadm.php";
            if ($adm == true){
                echo "<br><center><a href='paginaadm.php'>Página do Administrador</a></center>";;
            }
        }
        
            else {
               include "login.php";
            }
         ?>
        <section>
            <h1 class="center">PÁGINA DO ADMINISTRADOR</h1>
            <article>
            <?php
    $opcao = $_POST['tipoCRUD'];
    switch ($opcao) {
        case "R":
                include "conecta.php";
                    $sql="SELECT * FROM usuarios";

                    $resultado=mysqli_query($conexao,$sql) or die ("Não foi possível executar a SQL: ".mysqli_error());

                            if($resultado){
                 while ($row = mysqli_fetch_array($resultado)){
                         echo "<center>Nome: ".$row["nome"]." - "."Email: ".$row["email"]." - "."Sexo: ".$row["sexo"]." - "."Data de nascimento: ".$row["datanascimento"]." - "."Username: ".$row["username"]."</center><br/>";
    }
}

mysqli_close($conexao);

        break;
        case "D":
            $formulario =
                include "conecta.php";
                    $sql="SELECT * FROM usuarios";

                    $resultado=mysqli_query($conexao,$sql) or die ("Não foi possível executar a SQL: ".mysqli_error());

                            if($resultado){
                                echo "<form action='delete.php' method='post'>";
                 while ($row = mysqli_fetch_array($resultado)){
                     
                         echo "<input type='radio' name='delete' value='".$row["nome"]."'>Nome: ".$row["nome"]." - Usuario: ".$row["username"]."<br/>";
    }
                        echo "<br><input type='submit' value='REMOVER'/></form>";
}

mysqli_close($conexao);
        break;
        
    }        

?>
            </article>    
        </section> 
            <div class="x"></div>
        <footer>
            <?php
                include "footer.php";
            ?>
        </footer>
    </body>
</html>