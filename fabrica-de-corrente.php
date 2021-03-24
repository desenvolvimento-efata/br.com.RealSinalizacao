<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Fábrica de Correntes";
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

                    <p>A real sinalização não é somente <strong>fábrica de correntes</strong>, mas também conta a fabricação de diversos outros produtos que em um todo são extremamente essenciais para a sinalização em qualquer lugar do mundo. Podemos concordar que um lugar com uma boa sinalização, leva mais segurança e com certeza tem consigo a ordem, seja ela no trânsito com automóveis ou até mesmo onde transitam pessoas. Por sermos uma <strong>fábrica de correntes</strong> para sinalização, temos total propriedade para falarmos sobre tal equipamento, e sobre a importância que o mesmo possui. </p>

                    <h2>SE VOCÊ PROCURA UMA FÁBRICA DE CORRENTES, A REAL SINALIZAÇÃO É A EMPRESA CORRETA! </h2>

                    <p>Somos uma grande <strong>fábrica de correntes</strong> que são geralmente usadas para delimitar ambientes juntamente com um pedestal fabricado com pvc, esses pedestais normalmente possuem duas hastes nas laterais para que a corrente possa ser corretamente encaixada, e assim realizar a devida função. Certamente você já deve ter visto nas vias alguma blitz (batida policial sem aviso, com um número elevado de policiais) ou até mesmo em estacionamentos de supermercados ou shoppings pedestais com correntes nesses locais para separar o ambiente e manter a maior ordem possível. E nós, por sermos uma <strong>fábrica de correntes</strong> queremos entregar o melhor equipamento possível para você, cliente que procura equipamentos com alta excelência. </p>

                    <p>Há tempos nos tornamos uma <strong>fábrica de correntes</strong> e de outros equipamentos que são vistos como essenciais para uma boa sinalização. Essas correntes são fabricadas com polietileno que é considerado quimicamente o polímero mais simples e que é usado frequentemente no mundo todo. As correntes fabricadas pela real sinalização são de alta durabilidade e resistência, sem contar que são feitas para suportar reações adversas do tempo como, chuva ou sol. </p>

                    <h3>SOMOS A MELHOR <strong>fábrica de correntes</strong> PARA SINALIZAÇÃO! </h3>

                   <p> Você que procura uma excelente <strong>fábrica de correntes</strong>, a real sinalização é a empresa correta, porque nós nos preocupamos com cada detalhe dos nossos produtos a fim de entregar produtos com qualidade e maestria para cada parceiro nosso. A real sinalização é uma empresa referência no segmento de sinalização viária e certamente ao adquirir um produto nosso você estará levando pra casa as melhores correntes do mercado.</p>

                    <p>Com uma grande equipe, a real sinalização está à disposição de receber todos os clientes na empresa para que possamos esclarecer qualquer tipo de dúvida e claro, entregar o melhor atendimento possível. Entre em contato conosco pelos canais de atendimento que estão disponíveis no site. </p>


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