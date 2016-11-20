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

            echo "<section>
            <h1>CURIOSIDADES SOBRE O HOMEM DE FERRO I</h1>
            <article>
                <h2>Improviso</h2>
                <img class='curi' src='IMAGENS/curiosidadeshm1/1.jpg' alt='tony e seu carro'>
                <p><br><br><br>O roteiro não estava completo quando as filmagens começaram, como os produtores estavam mais focados na história e ação, o dialogo era, em grande parte, improvisado. Jon Favreau reconheceu que isso fez com que o filme fosse mais real.</p>
                <p>Diversas cenas eram gravadas com duas câmeras diferentes, para melhor capturar as linhas improvisadas. Enquanto Robert Downey Jr. gostava da liberdade e pedia para filmar diversas cenas, sempre querendo fazer algo novo, Gwyneth Paltrow teve dificuldades em acompanhar as filmagens, já que ela nunca sabia o que ele iria dizer.</p>
            </article>
            <div class='x'></div>
            <article>
                <h2>Cena Final</h2>
                <img class='curi' src='IMAGENS/curiosidadeshm1/2.jpg' alt='tony stark'>
                <p><br><br><br><br><br>Na cena final, onde Tony Stark revela ser o Homem de Ferro, todos os extras acreditavam se tratar de uma sequencia de sonho. Robert Downey Jr. pediu para que eles se sentassem, e não ficassem de pé, pois era mais real e confortável para os diversos atores.
</p>
            </article>
            <div class='x'></div>
            <article>
                <h2>JAVIS</h2>
                <img class='curi' src='IMAGENS/curiosidadeshm1/3.jpg' alt='javis'>
                <p><br><br><br><br>Segundo Paul Bettany, ele não sabia nada da história ou personagem antes de aceitar trabalhar no filme como a voz de JARVIS, ele fez o trabalho apenas como um favor para Jon Favreau. Bettany gravou todas as suas falas em duas horas.</p>
                <p>Além disso, Favreau decidiu colocar JARVIS como uma inteligência artificial e não um mordomo, como nos quadrinhos, para não assimilarem o personagem ao Alfred Pennyworth, de Batman.</p>
            </article>
            <div class='x'></div>
            <article>
                <h2>Inception</h2>
                <img class='curi' src='IMAGENS/curiosidadeshm1/4.jpg' alt='tony stark'>
                <p><br><br><br><br>Antes da cena da imprensa coletiva no final do filme, Tony Stark está lendo um jornal com uma foto amadora do Homem de Ferro na capa. A imagem é retirada de um vídeo, filmada por alguns fãs que se esconderam atrás de arbustos durante o inicio das filmagens e caiu na internet em 2007.</p>
            </article>
            <div class='x'></div>
            <article>
                <h2>Nick Fury & Vingadores</h2>
                <img class='curi' src='IMAGENS/curiosidadeshm1/5.jpg' alt='nick fury'>
                <p><br><br><br><br>Brian Michael Bendis escreveu três páginas de dialogo para a cena do Nick Fury no final do filme, os produtores, no entanto, escolheram apenas as melhores linhas. Para manter o segredo, a cena foi filmada com poucas pessoas e foi omitida de todas as prévias do filme.</p>
                <p>Além disso, a cena prenuncia Os Vingadores, filme que iria ser lançado em 2012, quatro anos após o lançamento de Homem de Ferro.</p>
            </article>  
            <div class='x'></div>
        </section>";
        }
        
            else {
               include "login.php";
               echo "<section>
            <h1>CURIOSIDADES</h1>
            <br><br><center><b><p>Acesso restrido a usuários logados. Para vizualizar o conteúdo, faça o login ou <a href='etapa1.php'>cadastre-se</a>!</b></p></center><br><br><br><br>";            }
         ?>
        <footer>
            <?php
                include "footer.php";
            ?>
        </footer>
    </body>
</html>