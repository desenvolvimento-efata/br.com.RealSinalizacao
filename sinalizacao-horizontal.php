<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Sinalização Horizontal";
    $description = ""; // Manter entre 130 a 160 caracteres   
    $url_title   = $ef->formatStringToURL($title);
?>

<?php include "php/head.php"; ?></head>

<body>
    
    <?php include "php/header.php"; ?>
    
    <main class="main-content">
        <section class="container">
            <?php echo $ef->breadcrumb(array("Informações", $title)); ?>
            <div class="row">
                <div class="col-md-9 text-justify">
                    <h1 class="main-title"><?php echo $title; ?></h1>
                    <a href="<?php echo $url."img/".$url_title."/".$url_title.".jpg"; ?>" title="<?php echo $title; ?>" class="img-fancy-pc">
                        <img src="<?php echo $url."img/".$url_title."/".$url_title."-thumb.jpg"; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" class="img-right img-responsive">
                    </a>

                    <p>Certamente você já deve ter escutado ou até mesmo falado que atualmente parece crescer ainda mais o número de carros nas vias e estradas, e sim, é uma afirmação mais que correta. Do ano de 2001 até 2016 foi registrado uma quantidade de veículos duas vezes e meia mais do que anteriormente sendo assim, chegando ao número de 61 milhões, fora que o número de automóveis teve um crescimento três vezes mais do que a população de São Paulo e, para completar, hoje em dia temos até cidades que possuem mais carros do que habitantes e Rio Preto que fica localizado no interior de São Paulo é um exemplo disso. </p>

                    <h2>POR QUE A SINALIZAÇÃO HORIZONTAL É TÃO IMPORTANTE NO DIA A DIA? </h2>

                    <p>Sabemos que para termos uma ordem em qualquer local deve-se ter sinalização e regras/ordens a serem cumpridas, certo? Partindo desse princípio, todos os condutores devem saber os significados de cada sinalização, incluindo a <strong>sinalização horizontal</strong> que está tão presente nas vias e rodovias públicas, e é dever dos condutores de automóveis e até mesmo pedestres terem o conhecimento sobre a <strong>sinalização horizontal</strong> e outras sinalizações, tais como: </p>

                    <ul>
                        <li>Sinalização vertical; </li>
                        <li>Sinalização sonora;</li>
                        <li>Sinalização gestual; </li>
                        <li>Sinalização luminosa;</li>
                        <li>Dispositivos auxiliares.</li>
                    </ul>

                   <p> E qual é a principal função da <strong>sinalização horizontal</strong>? Falaremos um pouco sobre a <strong>sinalização horizontal</strong> e também o motivo de ser tão importante na atualidade. A <strong>sinalização horizontal</strong> refere-se a tudo que é feito e realizado diretamente nos pavimentos de qualquer via, ou seja, asfalto, e certamente iremos saber quais são as sinalizações através de linhas, símbolos, marcações e legendas. A <strong>sinalização horizontal</strong> é utilizada para organizar o fluxo de pedestres e de veículos e também para controlar e orientar situações que podem ocorrer inesperadamente.</p>

                    <h3>AFINAL, COMO PODEMOS DIFERENCIAR A SINALIZAÇÃO HORIZONTAL? </h3>

                    <p>Para facilitar e ajudar no discernimento da <strong>sinalização horizontal</strong>, as vias são demarcadas com cores diferenciadas e as citaremos aqui: a cor preta é para diferenciar o contraste da pintura com o pavimento; a cor vermelha é usada para ciclovias, ciclofaixas, e também para símbolos de farmácias e hospitais; a cor amarela é para demarcar espaços, orientar fluxos contrários e para marcar espaços que sejam proibidos; já a cor branca é para marcar fluxos que possuem o mesmo sentido, usada também para símbolos e para faixas de pedestres e, por último a cor azul que geralmente é utilizada para marcar paradas de embarque e desembarque de pessoas que possuem deficiência física e estacionamentos. </p>

                    <p>Se você deseja conhecer mais sobre nossos equipamentos, entre em contato agora mesmo. Estaremos dispostos a lhe atender! </p>


                    <?php include "php/includes/direitos-texto.php"; ?>
                    <?php include "php/includes/social-media.php"; ?>
                    <?php include "php/includes/formulario-palavra-chave.php"; ?>
                    <?php include "php/includes/regioes-sao-paulo.php"; ?>
                    <?php // include "php/includes/regioes-brasil.php"; ?>
                    <?php include "php/includes/paginas-relacionadas.php"; ?>
                </div>
                <aside class="col-md-3">
                    <?php include "php/includes/sidebar.php"; ?>
                </aside>
            </div>
        </section>
    </main>
    
    <?php include "php/footer.php"; ?>
    
</body>
</html>