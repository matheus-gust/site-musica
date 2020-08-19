<?php
$genero = 't';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>

<html>

<head>
    <title>
        A arte da musica
    </title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #D0D0D0;">
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #403226;">
        <a class="navbar-brand" href="http://127.0.0.1">
            <img style="width: 17px;" src="images/clave-de-sol.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div style="margin-left: 87%;" class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a style=" color: #FFFFFF;" class="nav-link" href="http://127.0.0.1/paginas/sugestoes.html">Enviar Sugestão</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid intro">
        <div class="row">
            <div class="col-12 ">

            </div>
        </div>
    </div>

    <section class="anime">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <hr>
                    <h1>A música de hoje</h1>

                    <p> A música, apesar de ter uma origem contraditória, é uma arte muito consumida nos dias de hoje, e aqui mostrarei como são vistos cada gênero hoje em dia </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <a class="links" href="<?php echo $url . 'paginas/' . 'pagina-generos.php?genero=country&id=0'; ?>">
                        <div class="menu" style="background-color: #D8BB4D;">Country</div>
                    </a>
                </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <a class="links" href="<?php echo $url . 'paginas/' . 'pagina-generos.php?genero=eletronica&id=1'; ?>">
                        <div class="menu" style="background-color: #59B641;"> Eletrônica </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <a class="links" href="<?php echo $url . 'paginas/' . 'pagina-generos.php?genero=hip-hop&id=2'; ?>">
                        <div class="menu" style="background-color: #164BBD;"> Hip Hop </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <a class="links" href="<?php echo $url . 'paginas/' . 'pagina-generos.php?genero=jazz&id=3'; ?>">
                        <div class="menu" style="background-color: #5515BF;">Jazz</div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12 col-md-3">
                    <a class="links" href="<?php echo $url . 'paginas/' . 'pagina-generos.php?genero=erudito&id=4'; ?>">
                        <div class="menu" style="background-color: #706E81"> Erudito </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <a class="links" href="<?php echo $url . 'paginas/' . 'pagina-generos.php?genero=reggae&id=5'; ?>">
                        <div class="menu" style="background-color: #7D5D50;"> Reggae </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <a class="links" href="<?php echo $url . 'paginas/' . 'pagina-generos.php?genero=rock&id=6'; ?>">
                        <div class="menu" style="background-color: #30534C;"> Rock </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <a class="links" href="<?php echo $url . 'paginas/' . 'pagina-generos.php?genero=mpb&id=7'; ?>">
                        <div class="menu" style="background-color: #FF4C34;"> MPB </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <h1>Sugestões</h1>
                </div>
            </div>
            <hr>
            <section class="anime">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2>Epica (Sugestão Lusga)</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <img class="image" src="images/epica.jpg">
                        <figcaption class="legenda">Epica em 2015 perfomando no Wacken Open Air promovendo o álbum The Quantum Enigma.</figcaption>
                    </div>
                    <div class="col-12 col-md-6">
                        <p> - Epica é uma banda holandesa de metal sinfônico, fundada por Mark Jansen (ex-guitarrista do After Forever) em Abril de 2002. Utiliza vocais operísticos e gutural, e suas letras possuem um teor geralmente crítico, retratando o amor,
                            o ódio, a agonia, a revolta, a cultura, a ciência, a política, as religiões, a espiritualidade, temas filosóficos e o sentido da vida. A banda é conhecida pela combinação do heavy metal com elementos clássicos, sinfônicos e amplo
                            uso de orquestras e coros de ópera.</p>
                    </div>

                </div>
            </section>
            <hr>
            <section class="anime">
                <div class="row mb-3">
                    <div class="col-12">
                        <h2 class="text-right">Imagine Dragons (Sugestão MC Pyton)</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <p>- Imagine Dragons é uma banda de rock formada em Las Vegas nos Estados Unidos, consistindo do vocalista Dan Reynolds, do guitarrista Wayne Sermon, do baixista Ben McKee e do baterista Daniel Platzman. A banda primeiro ganhou exposição
                            com o lançamento do single "It's Time", seguido por seu álbum de estreia, Night Visions (2012), que resultou nos singles "Radioactive" e "Demons". A Billboard colocou-os no topo do ranking "Year In Rock" de 2013 e 2017 e nomeou-os
                            como "Banda Revelação de 2013" e "Melhor banda de 2017".[4] A Rolling Stone nomeou "Radioactive", que detém o recorde da maioria das semanas na Billboard Hot 100, como o "maior hit de rock do ano" (2013), e a MTV os chamou de "a
                            maior banda de breakout do ano" (também em 2013).</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <img class="image" src="images/imagine-dragons.jpg">
                        <figcaption class="legenda">A banda Imagine Dragons (FOTO: Divulgação)</figcaption>
                    </div>
                </div>
            </section>
            <hr>
            <section class="anime">
                <div class="row mb-3">
                    <div class="col-12">
                        <h2>Aurora</h2>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <img class="image" src="images/AURORA.jpg">
                        <figcaption class="legenda">A cantora Aurora realiza apresentação em Nova York - 02/06/2018 </figcaption>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>- Aurora Aksnes (Stavanger, 15 de junho de 1996), conhecida profissionalmente apenas como Aurora (estilizado como AURORA ou ΔURORΔ), é uma cantora e compositora norueguesa. Seu EP de estreia "Running with the Wolves" foi lançado pela
                            gravadora Decca Records em maio de 2015, recebendo grande aprovação de blogueiros de música e da imprensa. Mais recentemente gravou um cover de "Half the World Away", da banda Oasis, para uma propaganda Natalina de John Lewis e
                            um cover da música "Nature Boy" de Nat King Cole. Ganhou algum maior reconhecimento a partir de uma publicação de Katy Perry ao dizer que havia gostado da música "Runaway".</p>
                    </div>
                </div>
            </section>
            <hr>
            <section class="anime">
                <div class="row mb-3">
                    <div class="col-12">
                        <h2 class="text-right">A little piece of heaven</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <p>- " A Little Piece of Heaven " é uma música da banda Avenged Sevenfold .
                            Esta música é a nona música de seu álbum auto-intitulado . A música foi
                            escrita pelo baterista da banda The Rev e contém um acompanhamento de
                            orquestra sinfônica combinada com o característico som Heavy Metal da banda.
                            A música é impressionante por causa do conteúdo explícito de suas letras e
                            seu vídeo musical.<br>

                            O Vídeo conta uma história de amor, mas não uma história romântica
                            como qualquer outra. Isso relaciona como um casal doce vive junto até que
                            o noivo propõe o casamento e ela diz que não, então ele assassinou
                            sadisticamente a noiva e então pratica a necrofilia com o cadáver.
                            Depois desta cena de amor bestial, a noiva ressuscita e assassina o
                            namorado, por sua vez, em um trance de ir ao inferno e a noiva lhe dá a
                            oportunidade de viver juntos e feliz para sempre sem preocupações, matando
                            pessoas; Após o casamento.
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <video class="image" controls>
                            <source src="http://127.0.0.1/paginas/rock/y2mate.com%20-%20avenged_sevenfold_a_little_piece_of_heaven_official_music_video_VurhzANQ_B0_360p.mp4" type="video/mp4">
                        </video>
                        <figcaption class="legenda">Video oficial da musica</figcaption>
                    </div>
                </div>
            </section>
            <hr>
        </div>
    </div>

    <footer style="background-color: #403226;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <img class="mt-3 mb-3" style="width: 25%;" src="images/clave-de-do.png">
                </div>
                <div class="col-12 col-md-4 mt-5">
                    <img style="width: 100%;" src="images/Fema_marca2.png">
                </div>
                <div style="color: #FFFFFF;" class="col-12 col-md-4 text-center mt-5">
                    <p><strong>Trabalho avaliativo 2° Semetestre</strong></p>
                    <p>Aluno: Matheus Gustavo Santos da Silva<br> Turma: 1° BCC 2019 | RM: 1911420371
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
</body>

</html>