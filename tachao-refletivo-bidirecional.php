<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Tachão Refletivo Bidirecional";
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

                    <p>O <strong>tachão refletivo bidirecional</strong> é um equipamento totalmente necessário para para orientar e organizar o trânsito, tendo em vista que é muito utilizado para sinalizar a redução de velocidade em vias privadas e para delimitar locais, abaixo falaremos mais sobre as especificações e utilidade do <strong>tachão refletivo bidirecional</strong> mas, não podemos esquecer que assim como o <strong>tachão refletivo bidirecional</strong> tem sua importância, os demais equipamentos como segregadores, cones, lombadas, tachinhas também possuem grande parcela de importância para a sinalização viária e sua organização. </p>

                    <h2>ENTENDA MAIS SOBRE A IMPORTÂNCIA DO TACHÃO REFLETIVO BIDIRECIONAL. </h2>

                    <p>Partindo do princípio em que a sinalização viária é de fato de extrema relevância para todos nós, sejamos condutores ou pedestres, a sinalização nos protege com todas as suas regras e utilização de símbolos, placas, desenhos, e equipamentos. O maior objetivo da sinalização viária é manter a organização e transmitir mais segurança, trazendo assim um número bem menor de acidentes e riscos nas vias, rodovias e estradas públicas, sem contar que a sinalização viária também está presente locais privados como estacionamentos de supermercados, shoppings condomínios e empresas, e nesse caso é instalado o <strong>tachão refletivo bidirecional</strong> com o intuito de se comunicar com o condutor a fim de que o mesmo reduza a velocidade no local, já em locais públicos o <strong>tachão refletivo bidirecional</strong> é comumente usado para direcionar o tráfego e fazer com que os veículos trafegam respeitando o espaço que foi demarcado. Mas também, o <strong>tachão refletivo bidirecional</strong> é usado para demarcar vias onde a ultrapassagem é totalmente proibida, assim como as faixas de rolamento. </p>

                    <p>É comum encontrar o <strong>tachão refletivo bidirecional</strong> instalado em ciclofaixas, trevos, ciclovias, rotatórias e bifurcações. O <strong>tachão refletivo bidirecional</strong> é somente uma das opções em que o tachão é fabricado, podendo também ter a forma de monodirecional, onde só reflete e sinaliza um lado da pista, pode ser de maneira cega e por fim o <strong>tachão refletivo bidirecional</strong> é aquele que reflete e sinaliza os dois lados da pista, podem ser produzidos também com cores diferentes nos refletivos, as cores são âmbar, Cristal e Rubi. As especificações do <strong>tachão refletivo bidirecional</strong> são 50mm de altura, 150mm de largura e 250mm de comprimento. </p>

                    <h3>ADQUIRA SEUS PRODUTOS DE SINALIZAÇÃO VIÁRIA COM A MELHOR EMPRESA! </h3>

                    <p>A real sinalização conta com diversos funcionários especializados no segmento e treinados para fabricar os melhores produtos e prestar os melhores serviços e atendimento! </p>

                    <p>Ainda está com mais dúvidas? Entre em contato conosco agora mesmo, estaremos dispostos a lhe prestar o melhor atendimento. </p>


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