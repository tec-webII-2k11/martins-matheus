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
            <h1>Robert John Downey</h1>
            <article>
                <img class="xv" src="IMAGENS/photo.jpg" alt="Robert John Downey">
                <p><br><br>Downey nasceu em Manhattan,Nova York, o mais novo de dois filhos. Ele e sua irmã, Allyson, cresceram em Greenwich Village. Seu pai, Robert Downey, Sr., é um diretor, escritor, ator e produtor de filmes independentes, e sua mãe, Elsie Downey, é também atriz (tendo aparecido em diversos filmes de Downey, Sr.). O pai tem ascendência irlandesa e russa, e mãe tem ascendência alemã e escocesa. Robert Downey, Sr. nasceu sob o nome de "Robert Elias", mas mudou seu sobrenome para "Downey" (por causa de seu padrasto James Downey) quando era menor de idade e queria se alistar no exército. Filho de um conhecido diretor e de uma atriz, Downey Jr., vivenciou desde criança o meio artístico do cinema, o que posteriormente o ajudou na carreira de ator. Com apenas 5 anos de idade apareceu no filme Pound e aos 7 anos em Greaser's Palace, ambos de seu pai. Quando crianca, Downey vivia "rodeado pelas drogas". Seu pai, um usuário de drogas, permitiu que o filho consumisse maconha aos 6 anos, um incidente que hoje o pai se arrepende. Downey afirmou que o uso de drogas tornou-se um vínculo emocional entre ele e seu pai: "Quando eu e meu pai íamos consumir drogas juntos, era como se ele estivesse tentando expressar seu amor por mim da maneira que só ele sabia como". Eventualmente, Downey começou a abusar do álcool todas as noites e "fazendo mil telefonemas em busca de drogas". </p>
                <p>Aos 10 anos, o ator viveu na Inglaterra e estudou balé clássico como forma de ampliar seu currículo. Ele cresceu emGreenwich Village e participou do Stagedoor Manor Performing Arts Training Center, uma de escola artes para jovens artistas performáticos. Mas Downey nunca foi um menino quieto. "Todos o adoravam, mas ele era um terror. Ele nunca estava lá quando você precisava dele, impossível de ir para a cama na hora... Pulando pelas paredes!", diz o ex-conselheiro de Robert na Stagedoor Manor, Todd Graff.</p>
                <p>Quando seus pais se divorciaram em 1977, Downey se mudou para a Califórnia com o pai, em Los Angeles. Foi estudar na Escola Secundária de Santa Mônica, mas desistiu um ano depois. Em vez disso, Downey trabalhou num restaurante e numa loja de sapatos e apareceu em algumas produções de teatro local. Em 1982, o ator foi para Nova York morar com a mãe, em busca de uma carreira como ator meio-período.</p>
            
            </article>
        <div class="x"></div>
        <article>    
            <h2>Vida profissional</h2>
        <img class="imagem" src="IMAGENS/IronMan2.jpg" alt="robert">
                <p>Downey nunca teve uma formação dramática acadêmica, mas os contatos do pai abriram portas.Participou com 5 e 7 anos dos filmes Pound e Greaser's Palace, respectivamente. Aos 19 anos, fez uma ponta no filme de Michael Apted,Firstborn. No ano seguinte, com 20 anos de idade, ele fez alguns episódios de Saturday Night Live ajudado por Anthony Michael Hall, a participação lhe deu a projeção necessária para tentar a sorte em Hollywood. Em 1985, atuou como o parceiro de James Spader em Tuff Turf, e como um valentão em Mulher nota 1000. Em 1987 protagonizou o filme The Pick Up Artist, do diretor James Toback's, onde faz par com a então ídolo teen Molly Ringwald. O sucesso veio com o filmeAbaixo de Zero (Less Than Zero), onde representou um jovem viciado em cocaína. Mas o real marco na carreira do ator veio quando interpretou, aos 27 anos, o papel principal no filme de Sir Richard Attenborough, Chaplin onde interpretou o próprio Charles Chaplin, o que lhe valeu uma indicação ao Oscar.</p>
                <p>Após o fim de dois relacionamentos gracas a seu problema com drogas - o primeiro foi o namoro com Sarah Jessica Parker, e o segundo, o casamento com Deborah Falconer, com quem teve o filho Indio - a recuperação do ator veio no ano 2000, quando foi convidado para participar da série de TV Ally McBeal e protagonizar o advogado Larry Paul. Seu sucesso foi grande e isto fez com que fosse convidado a permanecer como parte do elenco fixo. Pelo seu trabalho na série, ganhou um Globo de Ouro e um SAG Award. Após uma recaída, Robert foi afastado do elenco devido novamente ao seu envolvimento com drogas e compromissos em tribunal. Permaneceu em um ano de reabilitação e foi liberado somente em abril de 2002.</p>
            <img class="xv" src="IMAGENS/personagens/robert-downey-jr-premiere-iron-man-3-03.jpg" alt="robert">
                <p>Após o fim de dois relacionamentos gracas a seu problema com drogas - o primeiro foi o namoro com Sarah Jessica Parker, e o segundo, o casamento com Deborah Falconer, com quem teve o filho Indio - a recuperação do ator veio no ano 2000, quando foi convidado para participar da série de TV Ally McBeal e protagonizar o advogado Larry Paul. Seu sucesso foi grande e isto fez com que fosse convidado a permanecer como parte do elenco fixo. Pelo seu trabalho na série, ganhou um Globo de Ouro e um SAG Award. Após uma recaída, Robert foi afastado do elenco devido novamente ao seu envolvimento com drogas e compromissos em tribunal. Permaneceu em um ano de reabilitação e foi liberado somente em abril de 2002.Em 2003, enquanto filmava Gothika no Canadá, conheceu a produtora Susan Levin e casaram em 2005. O ator começou a escrever sua autobiografia, que estava prevista para ser lançada no ano de 2008, mas desistiu do projeto. O adiantamento que ele havia recebido da editora foi devolvido.</p>
                <p>Ainda em 2008 ele estrelou o filme Homem de Ferro, grande sucesso e aclamado pela crítica, marcou a definitiva volta do ator, que afirmou adorar o herói. "Sou um fã do Homem de Ferro porque ele não é um herói comum. Tem problemas com a bebida, é mulherengo, carismático e agradável. É um personagem rico e repleto de defeitos." O filme já teve uma sequencia, Homem de Ferro 2, e a que tudo indica, será uma trilogia, o que deixa o ator empolgado. "Se já houve algum personagem em toda a minha carreira que eu ficaria feliz em me 'fundir' e ficar associado, seria o Tony Stark, porque é o trabalho mais legal que já tive."</p>
                <p>Em mais um filme produzido por sua mulher, Robert trabalhou em Sherlock Holmes , de Guy Ritchie (ex-marido de Madonna). No filme, ele interpreta o próprio Sherlock Holmes. Numa coletiva de imprensa realizada na festa de comemoração do início das gravações, ele prometeu que "este será o melhor Sherlock Holmes que vocês já viram".O filme também contou com Jude Law como "Dr. Watson".</p>
                <p>Em 2009, Robert recebeu uma indicação ao Oscar de Melhor Ator (coadjuvante/secundário) pela sua atuação no filme Tropic Thunder (br: Trovão Tropical), perdendo para Heath Ledger, que recebeu o prêmio postumamente. No filme, Robert interpretou o personagem Kirk Lazarus,um bem-sucedido e dedicado ator australiano, que, realiza uma cirurgia de pigmentacao da pele para interpretar um personagem negro. A tarefa de interpretar um personagem negro em uma comédia foi complicada: "Eu tinha muito receio em acreditar completamente que [o personagem] poderia ser representado tão bem que não seria problemático, que as pessoas entenderiam a piada. Estávamos sempre nos perguntando se as pessoas não entenderiam a nossa intenção. Eu sinto que este prêmio é para toda a equipe. Nós trabalhamos muito para chegar ao tom certo.</p>
                <p>Sempre dedicado aos seus trabalhos, o ator já admitiu: "Sou muito bom no que faço e não quero desmerecer uma pequena estudada no personagem.", o que o levou a diversas indicações e prêmios. No entanto, a bajulação e o título de "maior ator de sua geração" ajudaram o novo astro a caminhar para nove anos de inferno pessoal. "Tudo isso de 'maior ator' é uma grande baboseira. Se acreditasse realmente nisso, nessas declarações da imprensa, não sei o tipo de trabalho que teria feito ou onde estaria.Em 2013 recebeu três prêmios People's Choice Awards como Ator Favorito,Filme Favorito de Super Herói,Filme Favorito de ação por Homem de Ferro.</p>
                <p>Em agosto de 2015, a Forbes divulgou a lista dos atores mais bem pagos de Hollywood, onde Downey surge em primeiro lugar pelo terceiro ano consecutivo, com rendimentos anuais de 80 milhões de dólares (mais de 73 milhões de euros) desde Junho de 2013
                </p>
            </article>
            <article>
                <h2>Vida Pessoal</h2>
                
            <img class="imagem" src="IMAGENS/personagens/220px-Robert_Downey_Jr._and_Susan_Downey_@_2010_Academy_Awards.jpg" alt="robert">
                <p>Downey e a atriz Sarah Jessica Parker começaram a sair quando ele tinha 19 anos, depois de se conhecerem durante o filme Firstborn. Devido ao problema de drogas do ator, a relação foi afetada, terminando 7 anos depois. "Eu acreditava que era a pessoa que o mantinha inteiro.", disse Parker, certa vez. Depois de se separar de Jessica, em 1992 conheceu Deborah Falconer e casou-se com ela no mesmo ano. O casal teve um filho, Indio Falconer Downey, que nasceu em 7 de setembro de 1993. O padrinho de seu filho é o ator Anthony Michael Hall (os atores haviam se tornado amigos durante as filmagens de Mulher Nota 1000). A tensão sobre o seu casamento devido as repetidas idas de Downey a reabilitação e prisão finalmente chegou a um ponto de ruptura. Em 2001, durante a última prisão de Downey e a condenação à uma estadia prolongada na reabilitação, Falconer deixou o marido e levou Indio com ela. Downey e Falconer finalizaram os documentos do divórcio em 26 de abril de 2004. Atualmente, Downey vê seu filho com frequência depois de terem sido estabelecidos acordos de custódia com Falconer.<br></p>
                <p>Em 2003, enquanto filmava Gothika, conheceu a produtora Susan Levin. Downey e Susan secretamente iniciaram um romance durante um tempo, embora ela tivesse rejeitado aos avanços românticos do ator duas vezes. Apesar das preocupações de Susan, que achava que o romance não duraria após a conclusão da gravação porque "ele é um ator, eu tenho um trabalho real", o relacionamento do casal continuou após a produção de Gothika. Então, na noite antes do trigésimo aniversário de Levin, Downey a propôs em casamento. O casal se casou em 27 de agosto de 2005, em uma cerimônia judaica em Amagansett, New York. Ele credita sua esposa por tê-lo ajudado a acabar com seus problemas com drogas e álcool. "Era a perfeita, perfeita, perfeita, perfeita combinação de personalidades e dons".Downey possui uma tatuagem em seu braço esquerdo, onde se lê "Suzie Q", em homenagem a mulher - além de outra feita no braço direito, com o nome do filho, Indio. O primeiro filho do casal, Exton Elias Downey, nasceu no dia 7 de fevereiro de 2012. O segundo filho do casal é uma menina, Avri Roel Downey, nasceu no dia 5 de novembro de 2014.</p>
                <p>Downey afirma estar livre das drogas desde julho de 2003, graças a sua família, terapia, meditação, programas de recuperação, ioga e a prática obsessiva de Wing Chun Kung Fu - ao mesmo tempo para não pensar em drogas, e para manter sua sanidade como ator: "Não estou interessado nos socos e pontapés. Preciso me comprometer inteiramente com algo que me humilhe. Se você estudar qualquer forma de arte, seja shaolin do século 18, seja pintura renascentista, os segredos do universo se abrirão com dedicação.".</p>
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