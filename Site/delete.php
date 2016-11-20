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
                <br><br>
                <?php
                    include "conecta.php";
    
                     $nome = $_POST['delete'];
    
                                $resultado=mysqli_query($conexao, "DELETE FROM usuarios WHERE nome='$nome'") or die ("Não foi possível executar a SQL: ".mysqli_error());
    
                        if($resultado == True){
                              echo "<br/><center>Usuário removido com sucesso!</center>";
                     }
                    else{
                       echo "<br/>Erro na inserção";
    }
    mysqli_close($conexao);
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