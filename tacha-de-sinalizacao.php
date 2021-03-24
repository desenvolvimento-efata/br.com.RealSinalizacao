<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Tacha de Sinalização";
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

                    <p>Atualmente é comum encontrar diversos modelos de produtos de sinalização viária no mercado, e cada produto tem um objetivo e especificações diferentes, e é importante que saibamos sobre cada produto para não haver problemas ao nos depararmos com tais equipamentos em qualquer ambiente. A sinalização viária veio para ajudar na organização de trânsito em diversos locais, não somente em vias e rodovias públicas, mas também em estacionamentos de supermercados, shoppings, condomínios e etc. </p>


                    <h2>ENTENDA MAIS SOBRE A TACHA DE SINALIZAÇÃO! </h2>

                    <p>A <strong>tacha de sinalização</strong> geralmente é instalada nas faixas que são pintadas nas vias e rodovias, porém tem uma importância elevada devido a auxiliação em dias de chuva, neblina ou locais com pouca iluminação. No ano de 2013 foi revisada na ABNT (Associação Brasileira de Normas Técnicas) a norma de Tacha para Sinalização Viária NBR – 14636. E essa revisão não trouxe muitas mudanças na parte técnica, porém foi introduzida a utilização da Tacha Metálica, a qual vem apresentando um excelente desempenho nos trechos sinalizados. A <strong>tacha de sinalização</strong> pode ser utilizada de diversas maneiras, que são restringir acesso, delimitar locais e ambientes e fazer com que condutores diminuam a velocidade de seus veículos. </p>

                    <p>A <strong>tacha de sinalização</strong> leva o nome também de sonorizador, a fixação em vias geralmente ficam no meio ou atravessada na pista podendo ser colocada em duas ou mais faixas. A <strong>tacha de sinalização</strong> pode ser fabricada com somente um refletivo (monodirecional), com dois refletivos (bidirecional) e até sem refletivo (cego). São disponíveis em cores amarelas e brancas, as cores dos refletivos podem variar entre cristal, âmbar ou rubi e temos como especificações técnicas as seguintes dimensões: </p>

                    <ul>
                        <li>Altura: 20mm</li>
                        <li>Largura: 80mm</li>
                        <li>comprimento: 100mm</li>
                    </ul>

                    <p>Existem diversos modelos e nomes para produtos como a <strong>tacha de sinalização</strong> como os tachões de sinalização, mini tachões e as tachinhas. De fato é importante ter o conhecimento das sinalizações viárias já que constantemente temos acesso a elas no dia a dia.</p>

                    <h3>ADQUIRA SUA TACHA DE SINALIZAÇÃO COM A REAL SINALIZAÇÃO!</h3>

                    <p>Já citamos aqui a relevância da tacha de sinalização e não há dúvidas que a necessidade de tê-las é indispensável. Adquirindo as tachas com a real sinalização você levará para a sua casa um produto de altíssima qualidade e excelência. E se você procura mais equipamentos de sinalização viária entre em contato conosco, temos um enorme catálogo com diversos produtos e serviços. Nossos vendedores estarão prontos para lhe atender e prestar o melhor serviço possível, entre em contato já! </p>

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