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
            <br><br><br>
            <h1>Tony Stark</h1>
            <img src="IMAGENS/imagemhome.png" width="50%" height="800px" alt="armadura homem de ferro" >
            <article class="tony">
        <p>Tony Stark, o Homem de Ferro, é um cientista e empresário genial, bilionário, playboy e filantropo. Entra no MIT com 15 anos para a graduação em Engenharia elétrica e com 19 anos recebe o título de Doutorado em Física. Nunca faltou dinheiro para seu projetos, pois herdou a fortuna e os empreendimentos de seu pai aos 21 anos, quando este faleceu.
</p>
        <p>Dada a sua juventude, criou para si um estilo playboy bilionário. Essas características foram inspiradas no milionário americano da vida real, Howard Hughes.</p>
        <p>Na versão original, durante a guerra do Vietnã, o inventor e empresário Tony Stark foi vítima de uma explosão de granada. Stark sobreviveu à explosão mas estilhaços do explosivo se alojaram próximo ao seu coração, ameaçando sua vida. Ele foi capturado e levado até o líder Wong Chu. Restavam apenas alguns dias de vida para o americano, e Wong Chu o forçou a criar uma poderosa arma.Tony não criou uma arma e sim algo que o mantivesse vivo e permitisse derrotar os captores. Preso com ele estava outro gênio, o professor Ho Yinsen. Stark revelou seu plano ao professor e Yinsen o ajudou.
</p>
        <p>Quando os homens de Wong Chu se aproximaram, o velho professor pegou uma metralhadora, mas acabou sendo fuzilado, mas garantiu tempo suficiente para que Stark se recuperasse e se acostumasse a usar a armadura criada.
</p>
        <p>O Homem de Ferro enfrentou os soldados e os derrotou. Sua armadura resistia aos disparos contra ele. Wong Chu tentou fugir e o Homem de Ferro incendiou o galpão de munições fazendo com que a explosão o matasse. Os prisioneiros foram libertados.

</p>
        <p>Desde então Stark desenvolveu novas versões de sua armadura e adotou as cores vermelho e dourado como as padrões da armadura, com algumas pequenas alterações esporádicas como preto, prateado e, mais recentemente, branco.
</p>
        <p>No começo de suas atuações, e para que ninguém desconfiasse, Stark espalhou o boato de que o Homem de Ferro era seu guarda-costas. Nas aventuras dos anos 70 e 80, era comum heróis, vilões e coadjuvantes do Universo Marvel se referirem ao Homem de Ferro como "o lacaio de armadura". Apenas seu motorista, Harold "Happy" Hogan, e sua secretária, Virginia "Pepper" Potts, sabiam da identidade secreta de Stark.
</p>
        <p>Ainda na versão original, Tony Stark colaborava com as forças armadas americanas, desenvolvendo armas e máquinas com o objetivo de usá-las na Guerra Fria. Seus inimigos frequentes eram os comunistas (russos, asiáticos ou latino americanos: pessoas que defendiam o comunismo/socialismo). Enfrentavam o Homem de Ferro rivais tecnológicos como o Dínamo Vermelho (ou Escarlate) e o primeiro Homem de Titânio. Ou espiões especiais como a Viúva Negra e o Espião Mestre.
</p>
        </article>
        <div class="x"></div>
    </section>
        <section>
                <h1>O Ator Robert John Downey</h1>
            <a href="robert.php"><img src="IMAGENS/Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" alt="Robert Downey" width="18%"></a>
            <article class="floatr">
                <p>Robert John Downey, Jr.(Nova Iorque, 4 de abril de 1965) é um premiado ator e músico americano. Estreou como ator em 1970 aos 5 anos, no filme Pound, dirigido por seu pai, Robert Downey, Sr., e desde então tem atuado constantemente em trabalhos para televisão, cinema e ópera.
Durante os anos 80 ele participou de diversos filmes associado a Brat Pack. Less than Zero (br: Abaixo de Zero) foi um filme particularmente notável, não apenas porque foi a primeira atuação de Downey aclamada pela crítica, mas também porque impulsionou o já existente problema com drogas do ator. Após este filme, Downey passou a atuar em filmes de maior escala, como Air America, Soapdish e Natural Born Killers (Assassinos por Natureza). Ele interpretou Charlie Chaplin em 1992 no filme Chaplin, pelo qual foi indicado ao Oscar de melhor ator. Porém, foi como o bilionário Tony Stark/Homem de Ferro que ganhou maior notoriedade, interpretando-o nos filmes Homem de Ferro (Iron Man), de 2008, Homem de Ferro 2 (Iron Man 2), de 2010, Homem de Ferro 3 (Iron Man 3), de 2013. E ainda nesse mesmo personagem, no sucesso de bilheterias Os Vingadores, de 2012, e Os Vingadores: A Era de Ultron, de 2015. Em 2016 Downey participará também de Capitão América: Guerra Civil. <a href="robert.php">Saiba mais</a></p>
  
            </article>
        </section>
        <footer>
            <?php
                include "footer.php";
            ?>
        </footer>
    </body>
</html>