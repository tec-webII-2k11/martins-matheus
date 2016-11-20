<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Victor Martins e Victor de Menezes Cardoso">
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
            <h1 class="center">HOME</h1>
            <article>
                <img class="home" src="IMAGENS/imagemhome2.png" alt="homem de ferro" height="400">
                <p class="textohome"><br><br>Neste site vamos trazer informações e curiosidades, como armaduras, filmes, alidados, vilões e entre outros  sobre Tony Stark, o HOMEM DE FERRO. <br><br>Homem de Ferro é um personagem de HQ da Marvel Comics. Sua identidade verdadeira é a do empresário <a href="tonystark.html">Tony Stark</a>, que usa <a href="armaduras.html">armaduras</a> elétricas altamente equipadas no combate ao crime. Foi criado em 1963 pelo escritor Stan Lee, o roteirista Larry Lieber, e os desenhistas Jack Kirby e Don Heck. A primeira publicação foi em Tales of Suspense #39 (história publicada pela primeira vez no Brasil em Heróis da TV #100). Desde então se tornou um dos personagens mais proeminentes da Marvel, como membro dos Vingadores e adaptações para desenho animado e <a href="filmes.html">cinema</a> (no qual foi interpretado por Robert Downey, Jr.)</p>
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