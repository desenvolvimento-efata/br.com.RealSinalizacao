<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Tachão de Trânsito";
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

                    <p>O <strong>tachão de trânsito</strong> que também é muito conhecido informalmente como tartaruga é relevante para a organização do trânsito e orientação do mesmo, tendo em vista que ele permite delimitar espaços e locais. </p>

                    <p>O <strong>tachão de trânsito</strong> exerce como principal função a canalização do tráfego, assegurando assim o afastamento dos veículos no trânsito. A real sinalização se compromete com cada cliente a entregar produtos de altíssima qualidade e segurança, a anos estamos no mercado procurando dia após dia entregar o melhor. </p>

                    <h2>CONHEÇA MAIS SOBRE O TACHÃO DE TRÂNSITO E SUAS ESPECIFICAÇÕES. </h2>

                    <p>O <strong>tachão de trânsito</strong> é caracterizado por ser um equipamento de grande durabilidade e resistência já que o mesmo suporta grandes cargas e pesos sem danificar-se. É válido lembrar que, o <strong>tachão de trânsito</strong> possui em sua base dois pinos de aço para que fique estável no local, a instalação do <strong>tachão de trânsito</strong> é feita através de uma cola especial que garante que ele não se locomova e leve riscos ao local. A instalação do <strong>tachão de trânsito</strong> deve ser feita por profissionais treinados e qualificados para esse tipo de serviço, por este motivo é importante sempre procurar por empresas que possuem grande experiência no segmento de sinalização viária e que se comprometem a entregar segurança acima de tudo. </p>

                    <p>A utilização do <strong>tachão de trânsito</strong> geralmente é feita em locais que precisam ser delimitados com o objetivo de proibir ultrapassagens em vias, rodovias e estradas em áreas bifurcadas ou com rotatórias, trevos e áreas que são separadas para ciclovia, além de que o <strong>tachão de trânsito</strong> também é muito utilizado para a redução de velocidade em diversos locais, nossa empresa procura sempre acompanhar as inovações que surgem na indústria de sinalização, estamos em constante evolução para que todos os produtos sejam fabricados com a mais alta tecnologia, e com o <strong>tachão de trânsito</strong> não é diferente.</p>

                    <h3>REAL SINALIZAÇÃO - A MELHOR FÁBRICA DE TACHÃO PARA TRÂNSITO! </h3>

                    <p>Para fabricar produtos com tanta qualidade como o <strong>tachão de trânsito</strong>, é necessário uma boa equipe de desenvolvimento de projetos e de pessoas que fabricam, pessoas que estão dispostos a sempre aprender mais e mais, e na real sinalização temos funcionários assim, que são dedicados totalmente a entregar produtos excelentes e de alta durabilidade. </p>

                    <p>Na real sinalização você encontra todos os produtos necessários para a sinalização viária que irá levar segurança e qualidade ao ambiente. Se você ainda está com dúvidas, entre em contato conosco. </p>



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