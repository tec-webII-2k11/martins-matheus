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
            echo "<section class='listas'>
               <br><br><br>
            <h1>VILÕES</h1>
            <ul>
                <li>
                    <article>
                        <h2>Monge de Ferro</h2>
             
                        <img class='viloes' src='IMAGENS/personagens/mongedeferro.jpg' alt='Monge de Ferro'>
                  
                    </article>
                </li>
                <li>
                    <article>
                        <h2>Chicote Negro</h2>
           
                        <img class='viloes' src='IMAGENS/personagens/chicotenegro.jpg' alt='Chicote Negro '>
                      
                    </article>
                </li>
                <div class='x'></div>
                <li>
                    <article>
                        <h2>Mandarim</h2>
                    
                        <img class='viloes' src='IMAGENS/personagens/mandarim.jpg' alt='Mandarim'>
                    
                    </article>
                </li>
                <li>
                    <article>
                        <h2>Loki</h2>
                  
                        <img class='viloes' src='IMAGENS/personagens/loki.jpg' alt='Loki'>
            
                    </article>
                </li>
                <li>
                    <article>
                        <h2>Ultron</h2>
                    
                        <img class='viloes' src='IMAGENS/personagens/ultron.jpg' alt='Ultron'>
                 
                    </article>
                </li>
            </ul>
        <div class='x'></div>
        </section>";
        }
        
            else {
               include "login.php";
               echo "<section>
            <h1>VILÕES</h1>
            <br><br><center><b><p>Acesso restrido a usuários logados. Para vizualizar o conteúdo, faça o login ou <a href='etapa1.php'>cadastre-se</a>!</b></p></center><br><br><br><br>";            }
         ?>
        <footer>
            <?php
                include "footer.php";
            ?>
        </footer>
    </body>
</html>