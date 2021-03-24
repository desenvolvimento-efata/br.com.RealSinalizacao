<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title    	 = "";
    $description = ""; // Manter entre 130 a 160 caracteres
    
?>

    <?php include "php/head.php"; ?>

<body>

    <?php include "php/header.php"; ?>
    <main class="main-content">
        <div class="empresa text-justify">
            <div class="container">
                <div id="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a rel="home" href="<?php echo $url; ?>" title="Home" itemprop="url"><span itemprop="title">Home</span></a> »
                    <div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?php echo $url; ?>empresa" title="Empresa" itemprop="url">
                            <strong><span class="page" itemprop="title">Empresa</span></strong>
                        </a>
                    </div>
                </div>
                <h1>Empresa</h1>
                <img src="<?php echo $url; ?>imagens/empresa.jpg" alt="Empresa" title="Empresa" class="img-right">
                <h2>MISSÃO</h2>
                <p>Nosso compromisso é fornecer soluções em produtos e serviços com excelência e maestria, oferecendo,
                    por custos acessíveis, uma produção de alta qualidade, que possibilite aos clientes desfrutar de
                    artifícios de Sinalização Viária afins que agreguem benefícios a seus empreendimentos.</p>
                <h2>VISÃO</h2>
                <p>Ser referência no ramo de Sinalização Viária, gerando clientes satisfeitos que, através de nossos
                    produtos, conquistem novos mercados e, futuramente, tornem-se nossos parceiros.</p>
                <h2>VALORES</h2>
                <p>Ética, confiança, transparência, competência, qualidade, responsabilidade e comprometimento com o
                    cliente e a sociedade, bem como com o País.</p>
            </div>
        </div>
    </main>

    <?php include "php/footer.php"; ?>
</body>
</html>