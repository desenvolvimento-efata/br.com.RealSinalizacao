<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Placas de Lombada";
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

                    
                    <p>Na real sinalização você encontra diversos equipamentos e serviços voltados para o segmento de sinalização viária, a anos nos preocupamos em fabricar os melhores produtos e entregar o melhor atendimento para todos os nossos clientes. Fabricamos <strong>placas de lombada</strong>s, placas de velocidade, placas de parada, placas para passagem de pedestres e, além de fabricarmos as <strong>placas de lombada</strong>, fabricamos também tachões de trânsito, lombadas de borracha, tachas refletivas e entre outros. Nossa empresa é a empresa mais completa do mercado e que acima de tudo se dedica em cada detalhe para manter bons relacionamentos com todos os nossos clientes e parceiros. </p>

                    <h2>ENTENDA MAIS SOBRE A IMPORTâNCIA DAS PLACAS DE LOMBADA. </h2>

                    <p>As <strong>placas de lombada</strong>, ou de saliência (como também pode ser chamada), com definição A-18, é uma das placas de advertência, que se encaixa nas placas de trânsito. As <strong>placas de lombada</strong>, na verdade, advertem ao condutor de uma saliência, lombada ou ondulação transversal sobre a superfície de rolamento à frente. Todo e qualquer condutor de veículos devem ter o total conhecimento referente às leis e sinalizações de trânsito, haja vista que, para que possamos evitar acidentes e riscos maiores devemos manter a ordem no trânsito através das sinalizações que, justamente foram criadas para que haja diariamente no mundo todo uma organização e um número menor de acidentes. </p>

                    <p>As <strong>placas de lombada</strong> existem justamente para evitar acidentes e alertar aos condutores do que tem adiante, e as <strong>placas de lombada</strong> podem ser usadas em estacionamentos, vias, rodovias, ruas, vias industriais, ou até mesmo em qualquer local que precise ter sinalização de tráfego. Não podemos esquecer que, devemos saber reconhecer cada placa de sinalização ou leis de trânsito e obedecê-las, não ir de acordo com o que foi ordenado pode acarretar em recebimentos de multas, recolhimento de cnh, apreensão de veículo e diversas outras medidas.</p>

                    <h3>ENTRE EM CONTATO COM A REAL SINALIZAÇÃO E ADQUIRA SUAS PLACAS DE LOMBADA! </h3>

                    <p>Certo é que, a real sinalização por se preocupar em atender a todas as necessidades de seus clientes, possui um grande catálogo de produtos e prestação de serviços. Contamos com uma grande equipe de fabricação, atendimento, vendedores e prestadores de serviços. Nossos funcionários estão prontos para lhe atender da melhor maneira possível e tirar qualquer dúvida sobre produtos e serviços. </p>

                    <p>Entre em contato conosco já! Tudo para sinalização viária nós temos e nos comprometemos a entregar sempre o melhor para você!</p>


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