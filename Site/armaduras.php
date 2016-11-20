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
                echo "<br><center><a href='paginaadm.php'>Página do Administrador</a></center>";
            }
            echo "<section>
            <h1>ARMADURAS</h1>
            <article class='arm'>
                <h2>MARK-I</h2>
                <img src='IMAGENS/MARK-I.jpg' alt='armadura 1' height='720' width='360'>
                <p>O Mark I, foi a primeira armadura do Homem de Ferro construída e criada por Tony Stark, nos eventos iniciais do filme live-action, Homem de Ferro, e mais tarde foi usado para ser transformado no Monger Ferro infame por Obadiah Stane.</p>            
            </article>
            <article class='arm'>
                <h2>MARK-II</h2>
                <img src='IMAGENS/MARK-II.jpg' alt='armadura 2' height='720' width='360'>
                <p>A armadura Mark II foi construído por Tony Stark depois de escapar das Dez anéis . O processo era muito mais simples do que o Mark I, com mais foco em vôo.</p>
            </article>
            <article class='arm'>
                <h2>MARK-III</h2>
                <img src='IMAGENS/MARK-III.jpg' alt='armadura 3' height='720' width='360'>
                <p>A armadura Mark III foi projetada e criada por Tony Stark depois que ele descobriu tanto falha gelo do Mark II, bem como um curto em sua fonte de alimentação.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-IV</h2>
                <img src='IMAGENS/MARK-IV.jpg' alt='armadura 4' height='720' width='360>
                <p>MARK IV é a atualização da MARK III, basicamente a mesma armadura, mas com algumas melhorias estruturais e no sistema. MARK III era fácil de se vestir, mas para retira-la era muito difícil.</p>
            </article>
            <article class='arm'>
                <h2>MARK-V</h2>
                <img src='IMAGENS/MARK-V.jpg' alt='armadura 5' height='720' width='360'>
                <p>A armadura Mark V foi projetado para caber em uma mala, tornando mais fácil de transportar.</p>
            </article>
            <article class='arm'>
                <h2>MARK-VI</h2>
                <img src='IMAGENS/MARK-VI.jpg' alt='armadura 6' height='720' width='360'>
                <p>A armadura Mark VI foi criado por Tony Stark para substituir a armadura Mark IV, quando foi descoberto que o Arc Reactor pode ser alimentado por vibranium, que não se desgastam ou envenenar o usuário.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-VII</h2>
                <img src='IMAGENS/MARK-VII.jpg' alt='armadura 7' height='720' width='360'>
                <p>A armadura Mark VII é uma versão atualizada de Tony Stark ‘s armadura do Homem de Ferro que ele utiliza em algum momento durante o seu tempo com Os Vingadores .</p>
            </article>
            <article class='arm'>
                <h2>MARK-VIII</h2>
                <img src='IMAGENS/MARK-VIII.jpg' alt='armadura 8' height='720' width='360'>
                <p>Esta é a oitava ação construída por Tony Stark depois da batalha de Nova Iorque. Ele é menos volumoso e tem um design único e suave em sua máscara.</p>
            </article>
            <article class='arm'>
                <h2>MARK-IX</h2>
                <img src='IMAGENS/MARK-IX.jpg' alt='armadura 9' height='720' width='360'>
                <p>A MARK 9 não se diferencia muita da sua antecessora, apenas possui pequenas alterações no design e nos sistemas operacionais.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-X</h2>
                <img src='IMAGENS/MARK-X.jpg' alt='armadura 10' height='720' width='360'>
                <p>A MARK 10 aumentou ainda mais o poderio bélico das armaduras Stark, uma novidade são as travas nos pés, as quais lhe permitem ficar mais estável ao usar seu armamento pesado ou também imobilizar oponentes caídos.</p>
            </article>
            <article class='arm'>
                <h2>MARK-XI</h2>
                <img src='IMAGENS/MARK-XI.jpg' alt='armadura 11' height='720' width='360'>
                <p>A MARK 11 além de apresentar um sistema de armas mais inovador e mais armas, conta com um novo design.</p>
            </article>
            <article class='arm'>
                <h2>MARK-XII</h2>
                <img src='IMAGENS/MARK-XII.jpg' alt='armadura 12' height='720' width='360'>
                <p>A MARK 12 como todas as suas antecessoras ampliou os recursos bélicos e seus sistemas.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-XIII</h2>
                <img src='IMAGENS/MARK-XIII.jpg' alt='armadura 13' height='720' width='360'>
                <p>Primeira armadura a ter um pedaço retangular peito em vez de um círculo ou triângulo.</p>
            </article>
            <article class='arm'>
                <h2>MARK-XIV</h2>
                <img src='IMAGENS/MARK-XIV.jpg' alt='armadura 14' height='720' width='360'>
                <p>A MARK 14 é uma espécie de mix das armaduras anteriores.</p>
            </article>
            <article class='arm'>
                <h2>MARK-XV</h2>
                <img src='IMAGENS/MARK-XV.jpg' alt='armadura 15' height='720' width='360'>
                <p>A ação é mais leve que a maioria dos outros processos, de modo que é mais fácil para missões furtivas.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-XVI</h2>
                <img src='IMAGENS/MARK-XVI.jpg' alt='armadura 16' height='720' width='360'>
                <p>A Mark XVI Terno preto de Stealth (apelidado Nightclub ) foi construído após a batalha de Nova York.  </p>
            </article>
            <article class='arm'>
                <h2>MARK-XVII</h2>
                <img src='IMAGENS/XVII.jpg' alt='armadura 17' height='720' width='360'>
                <p>A Mark XVII Artilharia Nível RT Suit (apelidado do Coração Partido) foi criado depois da batalha de Nova York. </p>
            </article>
            <article class='arm'>
                <h2>MARK-XVIII</h2>
                <img src='IMAGENS/MARK-XVIII.jpg' alt='armadura 18' height='720' width='360'>
                <p>A Mark XVIII Furtivo Artilharia Nível RT Suit (apelidado de Casanova ) foi construído após a batalha de Nova York.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-XIX</h2>
                <img src='IMAGENS/XIX.jpg' alt='armadura 19' height='720' width='360'>
                <p>A Mark XIX Terno de alta velocidade (ou Tiger ) foi criado após os eventos da batalha de Nova York. </p>
            </article>
            <article class='arm'>
                <h2>MARK-XX</h2>
                <img src='IMAGENS/MARK-XX.jpg' alt='armadura 20' height='720' width='360'>
                <p>A Mark XX terno de Longa Distância (apelidado de Python) foi criado após os eventos da batalha de Nova York. </p>
            </article>
            <article class='arm'>
                <h2>MARK-XXI</h2>
                <img src='IMAGENS/MARK-XXI.jpg' alt='armadura 21' height='720' width='360'>
                <p>A Mark XXI Suit alta altitude (ou Midas) foi criado após a batalha NYC.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-XXII</h2>
                <img src='IMAGENS/MARK-XXII.jpg' alt='armadura 22' height='720' width='360'>
                <p>A Mark XXII War Machine terno Prototype 2.0 (ou Hot Rod) foi projetado para James Rhodes após a batalha com Whiplash ea batalha de Nova York como um protótipo para o War Machine armadura.</p>
            </article>
            <article class='arm'>
                <h2>MARK-XXIII</h2>
                <img src='IMAGENS/MARK-XXIII.jpg' alt='armadura 23' height='720' width='360'>
                <p>A Mark XXIII extrema Suit Heat (ou tons) foi criado depois da batalha de Nova York.</p>
            </article>
            <article class='arm'>
                <h2>MARK-XXIV</h2>
                <img src='IMAGENS/MARK-XXIV.jpg' alt='armadura 24' height='720' width='360'>
                <p>A Mark XXIV Suit combate pesado (ou tanque) foi criado depois da batalha de Nova York.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-XXV</h2>
                <img src='IMAGENS/MARK-XXV.jpg' alt='armadura 25' height='720' width='360'>
                <p>A Mark XXV Suit Construção Pesada (ou Thumper / Atacante), também conhecido como os músculos do grupo, foi criado após a batalha NYC. </p>
            </article>
            <article class='arm'>
                <h2>MARK-XXVI</h2>
                <img src='IMAGENS/MARK-XXVI.jpg' alt='armadura 26' height='720' width='360'>
                <p>A Mark XXVI Construção Pesada Suit Upgrade (ou Gama) foi criado depois da batalha de Nova York como uma atualização para o Thumper .</p>
            </article>
            <article class='arm'>
                <h2>MARK-XXVII</h2>
                <img src='IMAGENS/MARK-XXVII.jpg' alt='armadura 27' height='720' width='360'>
                <p>O XXVII Suit Chameleon Mark (ou Disco) foi criado depois da batalha de Nova York. </p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-XXVIII</h2>
                <img src='IMAGENS/MARK-XXVIII.jpg' alt='armadura 28' height='720' width='360'>
                <p>A Mark XXVIII Suit Radiation-Zone Mark (ou Jack) foi criado após os eventos de Os Vingadores .</p>
            </article>
            <article class='arm'>
                <h2>MARK-XXIX</h2>
                <img src='IMAGENS/MARK-XXIX.jpg' alt='armadura 29' height='720' width='360'>
                <p>A Mark XXIX Suit Nimble-construção (ou Fiddler) foi criado após os eventos da batalha de Nova Iorque.</p>
            </article>
            <article class='arm'>
                <h2>MARK-XXX</h2>
                <img src='IMAGENS/MARK-XXX.jpg' alt='armadura 30' height='720' width='360'>
                <p>A Mark XXX Centurião Prateado atualização Suit (ou Blue Steel) foi criado após os eventos da batalha de Nova York.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-XXXI</h2>
                <img src='IMAGENS/MARK-XXXI.jpg' alt='armadura 31' height='720' width='360'>
                <p>A MARK 31 é a mistura de MARK 21 e MARK 30, tendo ela capacidade atingir velocidades supersônicas e se manter energizada por longos períodos de tempo, sem necessitar de recarga. </p>
            </article>
            <article class='arm'>
                <h2>MARK-XXXII</h2>
                <img src='IMAGENS/MARK-XXXII.jpg' alt='armadura 32' height='720' width='360'>
                <p>A Mark XXXII avançado RT (ou Romeo ) Suit foi feito depois da batalha de Nova York. </p>
            </article>
            <article class='arm'>
                <h2>MARK-XXXIII</h2>
                <img src='IMAGENS/MARK-XXXIII.jpg' alt='armadura 33' height='720' width='360'>
                <p>Mark XXXIII avançado de energia (ou Centurião Prateado ) terno foi feito depois da batalha de Nova York.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-XXXIV</h2>
                <img src='IMAGENS/MARK-XXXIV.jpg' alt='armadura 34' height='720' width='360'>
                <p>Mark XXXIV Desastres Resgate Prototype Suit (Ou Canhota) armadura foi criado após a batalha de Nova York.</p>
            </article>
            <article class='arm'>
                <h2>MARK-XXXV</h2>
                <img src='IMAGENS/MARK-XXXV.jpg' alt='armadura 35' height='720' width='360'>
                <p>Mark XXXV Desastres Resgate Suit (ou Peixe Dourado) foi criado após a batalha de Nova York.</p>
            </article>
            <article class='arm'>
                <h2>MARK-XXXVI</h2>
                <img src='IMAGENS/MARK-XXXVI.jpg' alt='armadura 36' height='720' width='360'>
                <p>A Peacemaker (Pacificador) é uma armadura baseada na MARK 35, se distinguindo apenas pela falta das garras hidráulicas e a cor laranja.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-XXXVII</h2>
                <img src='IMAGENS/MARK-XXXVII.jpg' alt='armadura 37' height='720' width='360'>
                <p>Mark XXXVII Deep Sea “Hammerhead” terno foi criado após o incidente em Nova York. </p>
            </article>
            <article class='arm'>
                <h2>MARK-XXVIII</h2>
                <img src='IMAGENS/MARK-XXVIII.jpg' alt='armadura 38' height='720' width='360'>
                <p>A Mark XXXVIII Suit Heavy Lifting (ou Igor ) foi criado, surpreendentemente e apesar de seu tamanho e força, para construção e trabalho pesado e foi horrível em batalha ou proteção.</p>
            </article>
            <article class='arm'>
                <h2>MARK-XXXIX</h2>
                <img src='IMAGENS/MARK-XXXIX.jpg' alt='armadura 39' height='720' width='360'>
                <p>Mark XXXIXI Suborbital Armadura (apelidado de Gêmeos em livros e arte conceitual ou Starboost em jogos de vídeo) é uma das muitas armaduras criadas por Tony após a Batalha de Nova Iorque.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-XL</h2>
                <img src='IMAGENS/MARK-XL.jpg' alt='armadura 40' height='720' width='360'>
                <p>Mark XL Hypervelocity armadura (também conhecida como a Armadura Shotgun ) é uma das novas armaduras de ferro homem criado por Tony Stark e é um dos Ferro Legion . </p>
            </article>
            <article class='arm'>
                <h2>MARK-XLI</h2>
                <img src='IMAGENS/MARK-XLI.jpg' alt='armadura 41' height='720' width='360'>
                <p>A Mark XLI esqueleto Armadura (apelidada de Ossos ) é uma nova armadura criada por Tony Stark e parte da Legião de Ferro.</p>
            </article>
            <article class='arm'>
                <h2>MARK-XLII</h2>
                <img src='IMAGENS/MARK-XLII.jpg' alt='armadura 42' height='720' width='360'>
                <p>A Mark XLII Proporção Preenssil Autônomo Armadura era um terno desenhado por Tony Stark, após a batalha de New York City.</p>
            </article>
            <div class='x'></div>
            <article class='arm'>
                <h2>MARK-XLIII</h2>
                <img src='IMAGENS/MARK-XLIII.jpg' alt='armadura 43' height='720' width='360'>
                <p></p>
            </article>
            <article class='arm'>
                <h2>MARK-XLIV</h2>
                <img src='IMAGENS/MARK-XLIV.jpg' alt='armadura 44' height='720' width='360'>
                <p></p>
            </article>
            <article class='arm'>
                <h2>MARK-XLV</h2>
                <img src='IMAGENS/MARK-XLV.jpg' alt='armadura 45' height='720' width='360'>
                <p></p>
            </article>
        </section>";
        }
        
            else {
               include "login.php";
               echo "<section>
            <h1>ARMADURAS</h1>
            <br><br><center><b><p>Acesso restrido a usuários logados. Para vizualizar o conteúdo, faça o login ou <a href='etapa1.php'>cadastre-se</a>!</b></p></center><br><br><br><br>";            }
         ?>
        
        <footer>
            <?php
                include "footer.php";
            ?>
        </footer>
    </body>
</html>