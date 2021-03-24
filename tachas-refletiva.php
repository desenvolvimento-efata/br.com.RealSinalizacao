<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Tachas Refletivas";
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

                    <p>Tendo como missão fabricar e entregar produtos com a maior excelência do mercado e grande maestria, a Real Sinalização oferece aos clientes <strong>tachas refletivas</strong> que são de extrema importância para diversos locais que necessitam de sinalização. As <strong>tachas refletivas</strong>, na verdade, são uma complementação da pintura de faixas, bem como um auxiliar. E tem como principal objetivo aumentar a visibilidade do condutor em dias de chuvas, ou lugares muito escuros, ajudando também em contornos de vias. No ano de 2013, houve algumas mudanças nas normas ABNT em relação à norma de Tacha para Sinalização Viária NBR – 14636. Não houve grandes mudanças, mas algo que vem fazendo grande diferença nas vias é a introdução das tachas metálicas. </p>

                    <h2>AS TACHAS REFLETIVAS QUE FABRICAMOS POSSUEM GRANDE DESEMPENHO NOS LOCAIS ONDE SÃO INSTALADAS. </h2>

                    <p>Como as proporções das <strong>tachas refletivas</strong> são menores que as dos tachões ou mini-tachões, elas não auxiliam na redução de velocidade, porém na questão de delimitar vagas, separar vias, as <strong>tachas refletivas</strong> tem grande desempenho quando o local está escuro, com pouca iluminação. As <strong>tachas refletivas</strong> são fabricadas em nossa empresa dispõem de 20 milímetros em sua altura, 80 milímetros de largura e 100 milímetros de comprimento, aliás, são feitas em modelos monodirecional e bidirecional. </p>

                    <p>Na Real Sinalização, as <strong>tachas refletivas</strong> são fabricadas dentro de todos os padrões e normas, são fabricadas com todo o cuidado necessário, para que seja entregue algo em perfeito estado para todos os nossos clientes e parceiros. Nossas <strong>tachas refletivas</strong> possuem faixas brilhantes junto ao produto para que haja uma certa sinalização em locais de pouca luz como, vias, rodovias, estradas e entre outros locais que podem haver baixa intensidade de luz. </p>

                    <h3>AS MELHORES TACHAS REFLETIVAS ESTÃO AQUI, NA REAL SINALIZAÇÃO! </h3>

                    <p>A Real Sinalização é uma empresa qualificada e gabaritada, que por sua vez possui uma estrutura totalmente pronta e apta para a produção de diversos produtos para sinalização viária, contamos com grandes profissionais desde a administração até a fabricação dos produtos, e juntos levamos os melhores produtos para os nossos clientes. Disponibilizamos não somente das <strong>tachas refletivas</strong> mas também de outros produtos como, lombada de borracha, cones de sinalização, bate rodas, tachão para sinalização, pedestal de PVC e etc. Não perca tempo, entre em contato conosco!</p>


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