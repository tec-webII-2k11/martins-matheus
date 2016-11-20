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
            <h1>FILMES</h1>
            
            <article class="filme">
                <h2>HOMEM DE FERRO</h2>
                <img class="mySlides" src="IMAGENS/slideshow/02.jpg" alt="poster" width="400">


                
                <p class="tx">"Iron Man é um filme americano de 2008, baseado no personagem de mesmo nome da Marvel Comics. Dirigido por Jon Favreau, o filme é estrelado por Robert Downey Jr. como Tony Stark, presidente das "Indústrias Stark" que constrói uma armadura superpoderosa e se torna um super-herói tecnologicamente avançado, o Homem de Ferro. Gwyneth Paltrow interpreta a sua assistente pessoal, Pepper Potts, Terrence Howard interpreta o comandante militar James Rhodes e Jeff Bridges interpreta o executivo das Indústrias Stark Obadiah Stane. O filme estava em desenvolvimento desde 1990 na Universal Studios, 20th Century Fox e New Line Cinema, antes da Marvel Studios adquirir os direitos em 2006. Favreau assinou contrato para ser o diretor, dizendo que ia dar um toque de realismo ao filme, escolhendo filmar o filme principalmente na Califórnia. Durante as filmagens, os atores estavam livres para criar seus próprios diálogos, porque a pré-produção estava voltada para história e ação. Versões da armadura em borracha e metal, criadas pela empresa de Stan Winston, foram misturadas com imagens geradas por computador para gerar o personagem-título.</p>
                <a href="curiosidadeshm1.php">VEJA 5 CRIOSIDADES SOBRE O FILME HOMEM DE FERRO</a>
            </article>
            
            <article class="filme">
                <h2>HOMEM DE FERRO II</h2>
                <img class="mySlides1" src="IMAGENS/slideshow/04.jpg" alt="poster" width="400">
                
                <p class="tx">Iron Man 2 é um filme norte-americano de 2010 baseado no personagem homônimo da Marvel Comics . É uma continuação de Homem de Ferro, de 2008, e é o segundo filme de uma trilogia planejada. Dirigido por Jon Favreau, é estrelado por Robert Downey, Jr. reprisa o papel de Tony Stark. Se passa seis meses depois de Homem Ferro e seus acontecimentos são simultâneos a Homem de Ferro e anteriores a Homem de Ferro 3. Neste filme, Stark revela sua identidade e resiste em entregar sua tecnologia para o exército americano. Enquanto isso, Ivan Vanko duplica a tecnologia do Homem de Ferro e cria uma nova arma de destruição trazendo problemas para Stark.
</p>
                <a href="curiosidadeshm2.php">VEJA 5 CRIOSIDADES SOBRE O FILME HOMEM DE FERRO II</a>
            </article>
            
            <article class="filme" id="vigadores">
                <h2>OS VINGADORES</h2>
                <img src="IMAGENS/os-vingadores.jpg" alt="poster" width="400">
                <p class="tx">Os Vingadores é um filme americano de 2012, produzido pela Marvel Studios e distribuído pela Walt Disney Pictures. Baseado na equipe de super-heróis homônima da Marvel Comics, o filme foi escrito e dirigido por Joss Whedon e estrelado por Scarlett Johansson, Chris Evans, Mark Ruffalo, Chris Hemsworth, Robert Downey Jr., Jeremy Renner, Tom Hiddleston e Samuel L. Jackson. Seu lançamento nos Estados Unidos ocorreu em 4 de maio de 2012, em 3D. No Brasil, o filme estreou em 27 de abril de 2012. O longa-metragem foi anunciado em abril de 2005 e faz parte do chamado Universo Marvel Cinematográfico, um universo ficcional compartilhado por filmes independentes produzidos pelo Marvel Studios, cruzando diversos filmes de super-heróis da editora, como Homem de Ferro (2008), O Incrível Hulk (2008), Homem de Ferro 2 (2010), Thor (2011) e Capitão América: O Primeiro Vingador (2011). As filmagens tiveram início em 25 de abril de 2011, e ocorreram em diferentes cidades dos Estados Unidos.
</p>
                <article class="filme">
                    <h2>HOMEM DE FERRO III</h2>
                    <img src="IMAGENS/iron3.jpg" alt="poster" width="400">
                    <p class="tx">Homem de Ferro 3 (no original em inglês Iron Man 3) é um filme de ação estadunidense de 2013, produzido pela Marvel Studios e distribuído pela Walt Disney Studios Motion Pictures, baseado no personagem fictício Homem de Ferro da Marvel Comics. É a continuação de Homem de Ferro e Homem de Ferro 2, e o sétimo no Universo Marvel Cinematográfico, sendo o primeiro grande lançamento da franquia desde que o filme Os Vingadores foi lançado. Shane Black foi definido para dirigir um roteiro que ele co-escreveu junto com Drew Pearce, do qual foi baseado no arco de histórias "Extremis" escrito por Warren Ellis. Jon Favreau, que dirigiu os dois primeiros filmes da trilogia Iron Man, esta agora como produtor executivo, juntamente com Kevin Feige. Robert Downey Jr. reprisa seu papel como o personagem-título, com Gwyneth Paltrow, Don Cheadle e Jon Favreau reprisando seus papéis como Pepper Potts, James Rhodes e Happy Hogan, respectivamente. Guy Pearce, Rebecca Hall, Stephanie Szostak, James Badge Dale e Ben Kingsley completam o elenco principal do filme.</p>
                     <a href="curiosidadeshm3.php">VEJA 5 CRIOSIDADES SOBRE O FILME HOMEM DE FERRO III</a>
                </article>
            
            </article>        
        </section>
        <footer>
            <?php
                include "footer.php";
            ?>
        </footer>
    </body>
</html>

<!--Martins-->