<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Victor Martins e Victor de Matheus Tuma Faccin">
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
            <h1>ALIADOS</h1>
            <ul>
                <li>
                    <article>
                        <h2>Nick Fury</h2>
                        <img class='viloes' src='IMAGENS/personagens/nickfury.jpg' alt='nickfury'>
                    </article>
                </li>
                <li>
                    <article>
                        <h2>Máquina de Combate </h2>
                        <img class='viloes' src='IMAGENS/personagens/maquinadecombate.jpg' alt='Máquina de Combate '>
                    </article>
                </li>
                <li>
                    <article>
                        <h2>Capitão America</h2>
                        <img class='viloes' src='IMAGENS/personagens/capitaoa.png' alt='Capitão America'>
                    </article>
                </li>
                <li>
                    <article>
                        <h2>Thor</h2>
                        <img class='viloes' src='IMAGENS/personagens/thor.jpg' alt='Thor'>
                    </article>
                </li>
                <li>
                    <article>
                        <h2>Hulk</h2>
                        <img class='viloes' src='IMAGENS/personagens/hulk.jpg' alt='Hulk'>
                    </article>
                </li>
                <li>
                    <article>
                        <h2>Gavião Arqueiro</h2>
                        <img class='viloes' src='IMAGENS/personagens/gaviaoarqueiro.jpg' alt='Gavião Arqueiro'>
                    </article>
                </li>
                <li>
                    <article>
                        <h2>Visão</h2>
                        <img class='viloes' src='IMAGENS/personagens/visao.jpg' alt='Visão'>
                    </article>
                </li>
                <li>
                    <article>
                        <h2>Viúva Negra</h2>
                        <img class='viloes' src='IMAGENS/personagens/viuvanegra.jpg' alt='Viúva Negra'>
                    </article>
                </li>
            </ul>
            <div class='x'></div>
        </section>";
        }
        
            else {
               include "login.php";
               echo "<section>
            <h1>ALIADOS</h1>
            <br><br><center><b><p>Acesso restrido a usuários logados. Para vizualizar o conteúdo, faça o login ou <a href='etapa1.php'>cadastre-se</a>!</b></p></center><br><br><br><br>";
            }
         ?>
        <footer>
            <?php
                include "footer.php";
            ?>        
        </footer>
    </body>
</html>