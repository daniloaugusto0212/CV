<?php

if (!empty($_SERVER['HTTPS'])) {
    $siteUrl = 'https://' . $_SERVER['HTTP_HOST'];
} else {
    $siteUrl = 'http://' . $_SERVER['HTTP_HOST'];
}

$date = date('Y-m-d');
$date = new DateTime($date);

function dateStr(string $date)
{
    return new DateTime($date);
}

$address = 'Rua Moisés Alves dos Santos, <br>Jd. das Oliveiras - São Paulo - SP';
$maps = 'https://goo.gl/maps/xv2QZ5n1pGq2k7PA9';

if (isset($_GET['url']) && $_GET['url'] == 'guar') {
    $address = 'Rua Mercedes Maria de Jesus, 306 <br> Nogueira - Guararema - SP';
    $maps = 'https://goo.gl/maps/TzvLAziBEyzVijrh9';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164021913-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-164021913-1');
    </script>

    <!-- Primary Meta Tags -->
    <title>Currículo Profissional - Danilo Augusto</title>
    <meta name="title" content="Currículo Profissional - Danilo Augusto">
    <meta name="description"
        content="Currículo de um estudante de Análise e Desenvolvimento de Sistemas em constante desenvolvimento, à procura de uma oprtunidade no mercado do trabalho. Sempre estudando para tornar-me um desenvolvedor PHP Fullstack.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://cv.dansol.com.br/">
    <meta property="og:title" content="Currículo Profissional - Danilo Augusto">
    <meta property="og:description"
        content="Currículo de um estudante de Análise e Desenvolvimento de Sistemas em constante desenvolvimento, à procura de uma oprtunidade no mercado do trabalho. Sempre estudando para tornar-me um desenvolvedor PHP Fullstack.">
    <meta property="og:image" content="http://cv.dansol.com.br/images/slider-1-1920x1080.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://cv.dansol.com.br/">
    <meta property="twitter:title" content="Currículo Profissional - Danilo Augusto">
    <meta property="twitter:description"
        content="Currículo de um estudante de Análise e Desenvolvimento de Sistemas em constante desenvolvimento, à procura de uma oprtunidade no mercado do trabalho. Sempre estudando para tornar-me um desenvolvedor PHP Fullstack.">
    <meta property="twitter:image" content="http://cv.dansol.com.br/images/slider-1-1920x1080.jpg">

    <link rel="canonical" href="<?= $siteUrl ?>">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="common-css/bootstrap.css" rel="stylesheet">
    <link href="common-css/ionicons.css" rel="stylesheet">
    <link href="common-css/fluidbox.min.css" rel="stylesheet">
    <link href="01-cv-portfolio/css/styles.css" rel="stylesheet">
    <link href="01-cv-portfolio/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header>
        <div class="container">
            <div class="heading-wrapper">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="info">
                            <a style="display: block;" href="<?= $maps ?>" target="_blank"><i
                                    class="icon ion-ios-location-outline"></i></a>
                            <div class="right-area">
                                <h5><?= $address ?></h5>
                            </div><!-- right-area -->
                        </div><!-- info -->
                    </div><!-- col-sm-4 -->

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="info">
                            <i class="icon ion-ios-telephone-outline"></i>
                            <div class="right-area">
                                <h5>(11) 96457-0315</h5>
                                <h6>(11) 99457-6376</h6>
                            </div><!-- right-area -->
                        </div><!-- info -->
                    </div><!-- col-sm-4 -->

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="info">
                            <div class="right-area">
                                <h5>daniloaugusto0212@hotmail.com</h5>
                                <h6>contato@sitedan.com.br</h6>
                            </div><!-- right-area -->
                        </div><!-- info -->
                    </div><!-- col-sm-4 -->
                </div><!-- row -->
            </div><!-- heading-wrapper -->

            <a class="downlad-btn" href="documents/curriculo.pdf" target="_blank">Download CV</a>
        </div><!-- container -->
    </header>

    <section class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-lg-2"></div>
                <div class="col-md-10 col-lg-8">
                    <div class="intro">
                        <div class="profile-img"><img src="images/perfil.jpeg" alt="Imagem de perfil do Currículo">
                        </div>
                        <h1 style="font-size:35px;"><b>DANILO AUGUSTO PACHECO</b></h1>
                        <h4 class="font-yellow">Fullstack PHP Developer</h4>
                        <ul class="information margin-tb-30">
                            <li><b>NASC.: </b>02 DEZEMBRO, 1985</li>

                            <li><b>ESTADO CIVIL: </b>Casado</li>
                        </ul>
                        <ul class="social-icons">
                            <li><a href="https://bit.ly/35b90bI" target="_blank" class="ion-social-whatsapp"></a></li>
                            <li><a href="https://www.linkedin.com/in/danilo-augusto-a85385184/" target="_blank"><i
                                        class="ion-social-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/danilodansol/" target="_blank"><i
                                        class="ion-social-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/danilo.augusto.3323?ref=bookmarks" target="_blank"><i
                                        class="ion-social-facebook"></i></a></li>
                            <li><a href="https://github.com/daniloaugusto0212" target="_blank"><i
                                        class="ion-social-github"></i></a></li>
                        </ul>
                    </div><!-- intro -->
                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- intro-section -->

    <section class="portfolio-section section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="heading">
                        <h3><b>Portfolio</b></h3>
                        <h6 class="font-lite-black"><b>Projetos</b></h6>
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-md-8 text-center">
                    <div class="portfolioFilter margin-b-80">
                        <h4 class="text-center font-lite-black mb-3"><strong>Sistema Web</strong></h4>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="https://dansol.com.br/acabamento-portfolio/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"
                                    title="Sistema para controle de finanças para confecções de roupas."><b>Sistema
                                        confecção</b></a>
                            </div>

                        </div>
                    </div><!-- portfolioFilte -->
                    <hr>

                    <div class="portfolioFilter margin-b-80">
                        <h4 class="text-center font-lite-black mb-3"><strong>Multi pages</strong></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="https://dansol.com.br/imobiliaria/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"
                                    title="Portal imobiliário completo com painel administrativo."><b> Portal
                                        Imobiliário</b></a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://dansol.com.br/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"
                                    title="Portal de notícias com painel administrativo e web scraping."><b> Portal de
                                        Notícias</b></a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://cursos.dansol.com.br" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"
                                    title="Portal de cursos online com painel administrativo."><b>Cursos Online</b></a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="https://abrircnpjmei.com.br/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"
                                    title="Portal para serviços relacionado ao Mei, com gateway de pagamento."><b>Portal
                                        do MEI</b></a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://agenciastar-marketing.com/enigma/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"
                                    title="Página de captura com sistema de e-mail marketing integrado."><b>Página de
                                        Captura</b></a>
                            </div>
                        </div>
                    </div><!-- portfolioFilte -->
                    <hr>

                    <div class="portfolioFilter margin-b-80">
                        <h4 class="text-center font-lite-black mb-3"><strong>One page</strong></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="http://dansolacabamento.dansol.com.br/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"><b> Acabamento</b></a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://sitedan.com.br/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"><b> Site Profissional</b></a>
                            </div>
                            <div class="col-md-4">
                                <a href="http://foto.dansol.com.br" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"><b>Fotógrafo</b></a>
                            </div>
                        </div>
                    </div><!-- portfolioFilte -->
                    <hr>
                    <div class="portfolioFilter margin-b-80">
                        <h4 class="text-center font-lite-black mb-3"><strong>Páginas de Vendas</strong></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="https://lionmilionario.com.br/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"><b> Lion Milionário</b></a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://dinastiamilionaria.com/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"><b> Dinastia</b></a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://agenciastar-marketing.com/start-visionario/" target="_blank"
                                    rel="external" class="btn btn-block btn-lg button"><b>Start Visionário 2.0</b></a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://hugonuneslion.com.br/mentorialiondasvendas/" target="_blank"
                                    rel="external" class="btn btn-block btn-lg button"><b>Lion das Vendas</b></a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://marconesouzacoachdiamante.com.br/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"><b> Lapidando</b></a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://marconecoach.com.br/gilete/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"><b>Barbeiro</b></a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://www.gabrielempreendedor.com.br/closefriends/" target="_blank"
                                    rel="external" class="btn btn-block btn-lg button"><b>Close Friends</b></a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://dansol.com.br/startvisionario/" target="_blank" rel="external"
                                    class="btn btn-block btn-lg button"><b>Start Visionário</b></a>
                            </div>
                        </div>
                    </div><!-- portfolioFilte -->
                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- portfolio-section -->

    <section class="about-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h3><b>Sobre Mim</b></h3>
                        <h6 class="font-lite-black"><b>Resumo profissional</b></h6>
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-sm-8">
                    <p class="margin-b-50">Trabalhando atualmente como FullStack no desenvolvimento de sites e sistemas
                        Web, criando projetos do zero. <br>
                        Estou focado no estudo do Framework Laravel, experiência cem Desenvolvimento Web com Html, CSS,
                        Bootstrap 5, JavaScript, Jquery, PHP e MySql.
                    </p>

                    <div class="experience margin-b-50">
                        <h4><b>Habilidades: </b></h4>
                        <p class="font-yellow margin-tb-30"> - HTML e CSS
                            (<?= ($date->diff(dateStr('2019-12-01'))->y != 0) ? $date->diff(dateStr('2019-12-01'))->y . ' anos e ' : '' . $date->diff(dateStr('2019-12-01'))->m; ?>
                            meses);
                        </p>

                        <p class="font-yellow margin-tb-30"> - Bootstrap
                            (<?= $date->diff(dateStr('2020-03-01'))->y . ' anos e ' . $date->diff(dateStr('2020-03-01'))->m; ?>
                            meses);</p>

                        <p class="font-yellow margin-tb-30"> - PHP
                            (<?= $date->diff(dateStr('2020-02-01'))->y . ' anos e ' . $date->diff(dateStr('2020-02-01'))->m; ?>
                            meses);</p>

                        <p class="font-yellow margin-tb-30"> - MySql
                            (<?= $date->diff(dateStr('2020-02-01'))->y . ' anos e ' . $date->diff(dateStr('2020-02-01'))->m; ?>
                            meses);</p>

                        <p class="font-yellow margin-tb-30"> - JavaScript
                            (<?= $date->diff(dateStr('2020-08-01'))->y . ' anos e ' . $date->diff(dateStr('2020-08-01'))->m; ?>
                            meses);</p>

                        <p class="font-yellow margin-tb-30"> - Jquery
                            (<?= $date->diff(dateStr('2020-11-01'))->y . ' anos e ' . $date->diff(dateStr('2020-11-01'))->m; ?>
                            meses);</p>

                        <p class="font-yellow margin-tb-30"> - Laravel
                            (<?= ($date->diff(dateStr('2021-11-01'))->y) ? $date->diff(dateStr('2021-11-01'))->y . ' anos e ' : '' . $date->diff(dateStr('2021-11-01'))->m; ?>
                            meses);</p>

                        <p class="font-yellow margin-tb-30"> - Docker
                            (<?= ($date->diff(dateStr('2022-03-01'))->y) ? $date->diff(dateStr('2022-03-01'))->y . ' anos e ' : '' . $date->diff(dateStr('2022-03-01'))->m; ?>
                            meses);</p>

                        <p class="font-yellow margin-tb-30"> - Google Cloud
                            (<?=  ($date->diff(dateStr('2022-03-01'))->y != 0) ? $date->diff(dateStr('2022-03-01'))->y . ' anos e ' : '' . $date->diff(dateStr('2022-03-01'))->m; ?>
                            meses);</p>

                    </div><!-- experience -->

                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- about-section -->

    <section class="experience-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h3><b>Histórico Profissional</b></h3>
                        <h6 class="font-lite-black"><b>TRABALHO ANTERIOR</b></h6>
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-sm-8">

                    <div class="experience margin-b-50">
                        <h4><b>AGÊCIA ECOS</b></h4>
                        <h5 class="font-yellow"><b>DESENVOLVEDOR WEB FULLSTACK</b></h5>
                        <h6 class="margin-t-10">NOVEMBRO/2021 - PRESENTE</h6>
                        <p class="font-semi-white margin-tb-30">Atuando como Desenvolvedor FullStack PHP </p>
                        <ul class="list margin-b-30">
                            <li>
                                <h4>HABILIDADES DESENVOLVIDAS:</h4>
                            </li>
                            <li>Desenvolvimento de Sites e Sistemas Web.</li>
                            <li>FrontEnd com Html, CSS e Bootstrap 5.</li>
                            <li>BackEnd com PHP puro.</li>
                            <li>BackEnd com Laravel.</li>
                            <li>Banco de Dados com MySql.</li>
                        </ul>
                    </div><!-- experience -->

                    <div class="experience margin-b-50">
                        <h4><b>DANILO AUGUSTO PACHECO (MEI)</b></h4>
                        <h5 class="font-yellow"><b>PROPRIETÁRIO</b></h5>
                        <h6 class="margin-t-10">OUTUBRO/2015 - NOVEMBRO/2021</h6>
                        <p class="font-semi-white margin-tb-30">Prestação de serviços na área Têxtil fazendo acabamento
                            de roupas. </p>
                        <ul class="list margin-b-30">
                            <li>
                                <h4>HABILIDADES DESENVOLVIDAS:</h4>
                            </li>
                            <li>Controle de custos (planilhas).</li>
                            <li>Emissão de NFE.</li>
                            <li>Financeiro.</li>
                            <li>Administração em geral.</li>
                        </ul>
                    </div><!-- experience -->

                    <div class="experience margin-b-50">
                        <h4><b>Solange de Souza Pereira Conf Me</b></h4>
                        <h5 class="font-yellow"><b>Motorista</b></h5>
                        <h6 class="margin-t-10">Fevereiro/2011 a Outubro/2015</h6>
                        <p class="font-semi-white margin-tb-30">Função de motorista de entrega com veículo de pequeno
                            porte. </p>
                        <ul class="list margin-b-30">
                            <li>
                                <h4>HABILIDADES DESENVOLVIDAS:</h4>
                            </li>
                            <li>Controle de custos (planilhas).</li>
                            <li>Emissão de NFE.</li>
                            <li>Contas à pagar.</li>
                            <li>Motorista.</li>
                        </ul>
                    </div><!-- experience -->

                    <div class="experience margin-b-50">
                        <h4><b>W kid Ind e Com Textil</b></h4>
                        <h5 class="font-yellow"><b>Encarregado de Confecção</b></h5>
                        <h6 class="margin-t-10">Agosto/2003 a Fevereiro/2011</h6>
                        <p class="font-semi-white margin-tb-30">Iniciei nesta empresa como ajudante geral, aos poucos
                            fui subindo de cargo, ao final exercia o cargo de Encarregado. </p>
                        <ul class="list margin-b-30">
                            <li>
                                <h4>HABILIDADES DESENVOLVIDAS:</h4>
                            </li>
                            <li>Ajudante geral.</li>
                            <li>Controle de estoque.</li>
                            <li>Expedição.</li>
                            <li>Emissão de NFE.</li>
                            <li>Setor de corte.</li>
                            <li>Motorista.</li>
                        </ul>
                    </div><!-- experience -->


                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->

    </section><!-- experience-section -->

    <section class="education-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h3><b>FORMAÇÃO</b></h3>
                        <h6 class="font-lite-black"><b>CARREIRA ACADÊMICA</b></h6>
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-sm-8">
                    <div class="education-wrapper">
                        <div class="education margin-b-50">
                            <h4><b>PÓS GRADUAÇÃO</b></h4>
                            <h5 class="font-yellow"><b>Desenvolvimento Web FullStack, Universidade Anhanguera</b></h5>
                            <h6 class="font-lite-black margin-t-10">(Fevereiro de 2022 á Outubro de 2022) - Cursando
                            </h6>
                            <p class="margin-tb-30"> </p>
                        </div><!-- education -->

                        <div class="education margin-b-50">
                            <h4><b>Graduação</b></h4>
                            <h5 class="font-yellow margin-t-10"><b>Análise e Desenvolvimento de Sistemas, Universidade
                                    Anhanguera</b>
                            </h5>
                            <h6 class="font-lite-black margin-b-30"><b>(Conclusão em Dezembro de 2021)</b>
                            </h6>
                            <h5 class="margin-t-10 margin-b-10"><b>Matérias concluídas: </b></h5>
                            <ul class=" font-yellow list margin-b-30">
                                <li>>>REDES E SISTEMAS DISTRIBUÍDOS</li>
                                <li>>>PROGRAMAÇÃO WEB</li>
                                <li>>>DESENVOLVIMENTO MOBILE</li>
                                <li>>>DESENVOLVIMENTO DE BANCO DE DADOS</li>
                                <li>>>LINGUAGEM DE PROGRAMAÇÃO</li>
                                <li>>>ANÁLISE E MODELAGEM DE SISTEMAS</li>
                                <li>>>ANÁLISE ORIENTADA A OBJETOS</li>
                            </ul>
                            <h4><b>Graduação</b></h4>
                            <h5 class="font-yellow margin-t-10"><b>Ciências da Computação, FMU</b></h5>
                            <h6 class="font-lite-black margin-b-30"><b>(Janeiro de 2019 á Dezembro de 2020) -
                                    Transferido</b></h6>
                            <h5 class="margin-t-10 margin-b-10"><b>Matérias concluídas: </b></h5>
                            <ul class=" font-yellow list margin-b-30">
                                <li>>>ALGORITMOS E PROGRAMAÇÃO</li>
                                <li>>>COMUNICAÇÃO</li>
                                <li>>>CIRCUITOS DIGITAIS</li>
                                <li>>>INTERFACE HUMANO COMPUTADOR</li>
                                <li>>>SISTEMAS OPERACIONAIS</li>
                                <li>>>ENGENHARIA DE SOFTWARE</li>
                                <li>>>TEORIA DE SISTEMAS DE INFORMAÇÂO</li>
                                <li>>>FUNDAMENTOS PARA COMPUTAÇÃO</li>
                                <li>>>ARQUITETURA E ORGANIZAÇÃO DE COMPUTADORES</li>
                                <li>>>CÁLCULO I</li>
                                <li>>>DESENVOLVIMENTO HUMANO E SOCIAL</li>
                                <li>>>PROGRAMAÇÃO ORIENTADA A OBJETOS</li>
                                <li>>>TÉCNICAS DE PROGRAMAÇÃO</li>
                                <li>>>BANCO DE DADOS</li>
                                <li>>>ESTATÍSTICA APLICADA AO DATA SCIENCE</li>
                            </ul>
                        </div>
                        <div class="education margin-b-50">
                            <h4><b>Cursos Complementares</b></h4>

                            <h5 class="font-yellow"><b>Desenvolvimento Web Completo, Danki Code (PHP)</b></h5>
                            <h6 class="font-lite-black ">(Outubro-2020 | 85 horas) - Concluído</h6>
                            <a href="documents/certificado_dankicode.pdf" target="_blank" class="downlad-btn"><b>
                                    Certificado</b></a>
                            <p class="margin-tb-30"> </p>

                            <h5 class="font-yellow"><b>Python do básico ao avançado + Inteligência Artificial, Udemy</b>
                            </h5>
                            <h6 class="font-lite-black ">(12 horas) - Concluído</h6>
                            <a href="documents/CertificaPythonUdemy.pdf" target="_blank" class="downlad-btn"><b>
                                    Certificado</b></a>
                            <p class="margin-tb-30"> </p>

                            <h5 class="font-yellow"><b>HTML e CSS, Digital House</b></h5>
                            <h6 class="font-lite-black ">(Dezembro de 2019) - Concluído</h6>
                            <p class="margin-tb-30"> </p>

                            <h5 class="font-yellow margin-t-10"><b>Lógica de Programação, Senac</b></h5>
                            <h6 class="font-lite-black ">(Outubro de 2019) - Concluído</h6>
                            <a href="documents/certificadoSenac.pdf" target="_blank" class="downlad-btn"><b>
                                    Certificado</b></a>
                            <p class="margin-tb-30"> </p>

                            <h5 class="font-yellow"><b>Python, Curso em Vídeo</b></h5>
                            <h6 class="font-lite-black ">(40 horas) - Concluído</h6>
                            <a href="documents/CertificadoCursoEmVideoPython.pdf" target="_blank"
                                class="downlad-btn"><b> Certificado</b></a>
                            <p class="margin-tb-30"> </p>

                            <h5 class="font-yellow"><b>Banco de dados, Curso em Vídeo</b></h5>
                            <h6 class="font-lite-black ">(40 horas) - Concluído</h6>
                            <!--<a href="CertificadoCursoEmVideoPython.pdf" target="_blank" class="downlad-btn"><b> Certificado</b></a>-->
                            <p class="margin-tb-30"> </p>

                            <h5 class="font-yellow margin-t-10"><b>Inglês, Vila dos Idiomas</b></h5>
                            <h6 class="font-lite-black ">(Janeiro de 2016) - Junho( de 2016)</h6>
                            <p class="margin-tb-30"> </p>
                        </div><!-- education -->

                    </div><!-- education-wrapper -->
                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->

    </section><!-- about-section -->

    <section class="experience-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h3><b>Informações Complementares</b></h3>

                    </div>
                    <div class="experience margin-b-50">
                        <p class="font-semi-white margin-tb-30">Toda minha experiência profissional (17 anos) gira em
                            torno da confecção de roupas.
                            No começo de 2019 iniciei os estudos na área da tecnologia, e venho me esforçando arduamente
                            para entrar neste
                            mercado o mais breve possível, sem medir esforços.</p>
                    </div>
                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->

    </section><!-- experience-section -->

    <section class="form contato" id="contato">
        <div class="container">
            <h2 class="text-center">Entre em contato:</h2>
            <form action="Formulario/enviar.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome: </label>
                            <input class="form-control" type="text" name="nome" pattern="[a-zA-Z\s]+$" required>
                        </div>
                        <div class="form-group">
                            <label>E-mail: </label>
                            <input class="form-control" type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Telefone: </label>
                            <input class="form-control" data-mask="(00) 00000-0000" type="tel" name="phone"
                                placeholder="Opcional">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mensagem: </label>
                            <textarea class="form-control" name="message" cols="30" rows="10" required></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="identificador" value="form_contato" />
                    <input type="hidden" name="language"
                        value="<?= explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0] ?>">
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <input id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit"
                            name="acao" value="Enviar">
                    </div>
                </div>
            </form>
        </div>

    </section>



    <footer>
        <p class="copyright">
            &copy;<script>
            document.write(new Date().getFullYear());
            </script> Todo os direitos Reservados - Desenvolvido por <a target="_blank"
                href="https://sitedan.com.br">SiteDan</a>
        </p>
    </footer>

    <!-- whats app -->
    <!-- <div id="div_whatsapp">
        <a href="whatsapp.php" target="_blank">
            <img src="images/api-whatsapp-site.jpg"/>
        </a>
     </div> -->
    <!-- whats app -->


    <!-- SCIPTS -->

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
     -->
    <script src="common-js/tether.min.js"></script>

    <script src="common-js/bootstrap.js"></script>

    <script src="common-js/isotope.pkgd.min.js"></script>

    <script src="common-js/jquery.waypoints.min.js"></script>

    <script src="common-js/progressbar.min.js"></script>

    <script src="common-js/jquery.fluidbox.min.js"></script>

    <script src="common-js/scripts.js"></script>

</body>

</html>