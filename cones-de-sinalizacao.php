<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Cones de Sinalização";
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

                    <p>Entre diversos equipamentos de sinalização viária estão os <strong>cones de sinalização</strong>, que geralmente são colocados em estacionamentos de supermercados, estacionamentos de shoppings, e também se tornou muito comum vê-los em obras. Os <strong>cones de sinalização</strong> tem como principal função delimitar locais e espaços por serem geralmente bem chamativos e com cores que possibilitam a visualização mesmo em lugares com pouca iluminação, é costumeiro as cores serem fortes como, preto, amarelo ou branco e laranja. </p>

                    <h2>A SEGURANÇA EM QUE OS CONES DE SINALIZAÇÃO NOS TRAZEM. </h2>

                    <p>Uma vez que os <strong>cones de sinalização</strong> são utilizados para garantir segurança, os mesmos devem ser fabricados com materiais resistentes e com uma grande durabilidade, além disso, devem ser resistentes a qualquer reação adversa do tempo, como por exemplo, chuvas e sol. Assim como algumas placas, os <strong>cones de sinalização</strong> devem ter partes refletivas que facilitam ao motorista a boa visualização do local mesmo que esteja dirigindo durante a noite ou em qualquer lugar que não tenha luz suficiente. </p>

                    <p>A Real Sinalização visa sempre fabricar equipamentos para garantir a segurança e vale a pena citar alguns locais que os <strong>cones de sinalização</strong> são obrigatórios e de extrema importância: </p>

                    <ul>
                        <li>Em obras que são realizadas em vias públicas, é de grande necessidade a utilização de <strong>cones de sinalização</strong> para evitar acidentes, tendo em vista que, os veículos saberão que existem obras no local;</li>
                        <li>Em vias que podem ter ocorrido algum tipo de acidente, os <strong>cones de sinalização</strong> auxiliam na organização de trânsito e a evitar outros acidentes que podem ocorrer se o local não for devidamente sinalizado; </li>
                        <li>Existem diversos momentos e locais onde a presença de <strong>cones de sinalização</strong> são fundamentais, e podemos destacar também que, os cones se enquadram no grupo que leva o nome de Equipamentos de Proteção Coletiva (EPCs) que tem como dever promover a segurança do trabalho, com intuito de proteger o coletivo. </li>
                    </ul>

                    <h3>ADQUIRA OS MELHORES PRODUTOS DO MERCADO COM A REAL SINALIZAÇÃO! </h3>

                    <p>Nossa empresa tem como missão fabricar e oferecer produtos com a maior excelência possível e com grande maestria, nossa companhia conta com funcionários treinados e dispostos a tirar toda e qualquer dúvida que surgir sobre nossos equipamentos. Se você procura produtos para sinalização viária a Real sinalização é a melhor opção, além disso, temos um grande catálogo de produtos para todos os tipos de locais que precisam de sinalização. Ficaremos imensamente felizes em recebê-los em nossa empresa para sanar todas dúvidas e oferecer os melhores equipamentos do mercado.</p>


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