<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Sinalização Viária em SP";
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

                    
                    <p>e você é condutor de algum veículo, certamente teve que fazer o famoso cfc (Centro de Formação de Condutores) e lá você com certeza teve o contato com todos os símbolos e equipamentos usados na <strong>sinalização viária em SP</strong> e no Brasil inteiro. Aliás, na convenção de Viena que ocorreu a muitos anos atrás, foi estabelecido um acordo onde diversos países adotaram a utilização de símbolos parecidos a fim de que haja ordem e segurança no trânsito. Realizar a <strong>sinalização viária em SP</strong> é de extrema importância tendo em vista que para haver uma organização deve ter regras e leis que estabeleçam essa ordem.  </p>

                    <h2>SAIBA MAIS SOBRE A SINALIZAÇÃO VIÁRIA EM SP. </h2>

                   <p> Você sabia que não há somente uma sinalização em SP? Hoje em dia existem diversos tipos de <strong>sinalização viária em SP</strong> e entre elas estão a sinalização horizontal que é feita através de símbolos desenhados diretamente no pavimento como a faixa de pedestres e demarcações de vias, há também a sinalização vertical que é constituída por placas fixadas próximo as vias para comunicar algo aos condutores. Contamos também com a <strong>sinalização viária em SP</strong> luminosa que não é nada mais do que os faróis que possuem como principal objetivo controlar o fluxo de trânsito, e claro os faróis do seu próprio veículo. Fora essas sinalizações já citadas existem a sinalização gestual e a sinalização sonora. É imprescindível que o condutor saiba de todas as normas e regras de trânsito, sendo assim evitará perigos e acidentes. </p>

                    <p>Só em São Paulo tem aproximadamente 8,6 milhões de automóveis registrados do Detran, e para que todos esses carros consigam circular em segurança é obrigatório a utilização da <strong>sinalização viária em SP</strong>, as placas e os símbolos utilizados no dia a dia em vias e rodovias não são novidade para ninguém, haja vista que é algo antigo que vem se estabelecendo cada vez mais.</p>


                    <h3>SE VOCÊ PROCURA UMA EMPRESA DE SINALIZAÇÃO VIÁRIA EM SP, ENTRE EM CONTATO COM A REAL SINALIZAÇÃO!</h3>

                   <p> Desde a fundação da real sinalização, procuramos fabricar equipamentos que possuem a maior segurança para o seu ambiente, criando assim produtos de qualidade e que são totalmente admiráveis, tendo em vista que só fabricamos com excelência. Nossa equipe que trabalha na parte de fabricação está em constante evolução para que tudo o que entregarmos seja produzido com a total capacidade de se instalar adequadamente em seu ambiente. Entre em contato conosco, estaremos dispostos a lhe atender.</p>


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