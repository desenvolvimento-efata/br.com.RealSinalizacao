<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Palavra Chave";
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

                    <p>A real sinalização além de ser uma <strong>empresa de lombada de borracha</strong> é fabricante de muitos outros equipamentos para sinalização viária, onde atende diversas empresas e redes de condomínios, tendo vista que a sinalização viária é um serviço indispensável se colocarmos a segurança em primeiro lugar. Levando em consideração que, somente em São Paulo há mais de 8 milhões de veículos registrados no Detran, a existência da sinalização viária faz com que haja organização no trânsito, seja ele de veículos ou pedestres.  </p>

                    <h2>SE VOCÊ PROCURA POR UMA EMPRESA DE LOMBADA DE BORRACHA, A REAL SINALIZAÇÃO É A EMPRESA CORRETA. </h2>

                    <p>Por sermos uma <strong>empresa de lombada de borracha</strong>, certamente detemos o total conhecimento de quais os melhores produtos para a fabricação de tal produto, como fabricar e todas as especificações corretas. A lombada de borracha deve ser um equipamento com grande vida útil, já que por ela passarão diariamente toneladas dependendo da quantidade de veículos que circulam no ambiente. a real sinalização é uma <strong>empresa de lombada de borracha</strong> que se preocupa com a segurança de cada cliente e por este motivo, fabrica produtos de altíssima qualidade. </p>

                    <p>Como uma <strong>empresa de lombada de borracha</strong> procuramos sempre manter uma boa relação com todos os nossos clientes e parceiros visando ser referência no segmento. Desde a fundação da real sinalização nos preocupamos em fabricar equipamentos com excelência e ser a melhor <strong>empresa de lombada de borracha</strong>. Diferente da lombada de alvenaria, as lombadas de borracha fabricadas pela real sinalização são produzidas com módulos que facilitam a instalação, tem como objetivo principal a redução de velocidade de veículos dentro de estacionamentos de shoppings, condomínios, empresas, prédios e supermercados. </p>

                    <h3>ENTENDA AS VANTAGENS DE ADQUIRIR SEU PRODUTO COM A MELHOR EMPRESA DE LOMBADA DE BORRACHA. </h3>

                    <p>As lombadas emborrachadas leva consigo diversas vantagens, e podemos destacar entre elas:</p>

                    <ul>
                        <li>Você não precisará de obra para ser instalada, pois a mesma é de fácil instalação;</li>
                        <li>A lombada emborrachada pode suportar automóveis com até 20 toneladas por eixo;</li>
                        <li>Tem uma durabilidade incrível, levando em consideração que se exposta à chuva ou sol a mesma não irá estragar; </li>
                        <li>Sem dúvidas é um excelente redutor de velocidade para os ambientes internos e externos. </li>
                    </ul>

                    <p>É importante solicitar orçamento de tal produto com a melhor <strong>empresa de lombada de borracha</strong>, e por este motivo a real sinalização está disposta a prestar o melhor atendimento a todos os clientes. Entre em contato conosco agora mesmo. </p>


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