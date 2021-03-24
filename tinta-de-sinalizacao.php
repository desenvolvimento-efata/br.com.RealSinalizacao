<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Tinta de Sinalizaçãoo";
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

                    <p>Todos sabemos que a sinalização em vias é de extrema importância, não é mesmo? E por este motivo a <strong>tinta de sinalização</strong> tem sua parcela de importância quando o assunto é segurança em estradas, rodovias e locais onde se passam automóveis e pedestres. Se você procura por boa <strong>tinta de sinalização</strong> sempre opte por uma que tenha secagem rápida, resistência a abrasão e grande durabilidade. </p>

                    <h2>A MELHOR TINTA DE SINALIZAÇÃO ESTÁ AQUI, NA REAL SINALIZAÇÃO! </h2>

                    <p>É bom sempre estar atento pois há dois tipos de tintas que são utilizadas para a sinalização e entre elas estão a <strong>tinta de sinalização</strong> à base solvente que geralmente é compatível com concretos e asfalto, é excelente para a demarcação de vias, e a secagem dela geralmente gira em torno de 12 a 20 minutos, o que vamos combinar, é muito bom! A <strong>tinta de sinalização</strong> a base de solvente pode ser aplicada em áreas externas e internas, haja vista que a mesma é resistente a atritos e por geralmente ser produzida com microesferas de vidro ela reflete a luminosidade dos faróis dos automóveis. </p>

                    <p>Já quando falamos da <strong>tinta de sinalização</strong> à base de água, podemos descrever como uma excelente tinta com grande durabilidade e pouco odor, é ideal para se aplicar em asfaltos, ambientes internos e rodovias, esse tipo de tinta geralmente é usada mais para pintura de lombadas, estacionamentos de supermercados, shoppings e etc, é usada também para garagens e faixas de pedestres. Como a <strong>tinta de sinalização</strong> à base de solvente, essa que é à base de água também pode ser misturada com microesferas de vidro. A <strong>tinta de sinalização</strong> que é feita à base de água é menos prejudicial à saúde, por conter menos química em sua composição e tem também de 12 a 20 minutos de tempo de secagem. </p>

                    <h3>SAIBA A IMPORT NCIA DE ADQUIRIR A TINTA DE SINALIZAÇÃO DA NOSSA EMPRESA! </h3>

                    <p>Quando se é comprado uma <strong>tinta de sinalização</strong> onde não produzida com alta qualidade, e muito menos sem saber quais são as matérias-primas, ou comprando uma tinta que não se encaixa aos parâmetros das normas estabelecidas pela ABNT (Associação Brasileira de Normas Técnicas) você poderá levar algo que terá pouco durabilidade. Com a Real Sinalização não é assim, nós procuramos produzir todos os produtos e equipamentos com a mais alta tecnologia e excelência, e claro, seguindo todas as normas da ABNT. Entre em contato conosco e obtenha os melhores produtos e com a maior qualidade.</p>


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