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
                <br><br>
                <form action="crud.php" method="post" class="textoadm">
                    <fieldset>
                        <input type="radio" name="tipoCRUD" value="R"/>Ler usuários<br/>
                        <input type="radio" name="tipoCRUD" value="D"/>Deletar usuário<br/>
                        <br><input type="submit" value="START"/>
                    </fieldset>
                </form>
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