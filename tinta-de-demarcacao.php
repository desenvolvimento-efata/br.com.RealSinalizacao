<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Tinta de Demarcação";
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

                   <p> Tendo como missão entregar produtos e equipamentos de excelência, com a mais alta qualidade, nossa empresa se compromete com nossos clientes e parceiros. Cumprimos o prazo de entrega e realizamos serviços com maestria, Nossa empresa é especializada em sinalização viária e somos referência no mercado, procuramos sempre manter bons relacionamentos com todos que entram em contato conosco e se tornam nossos clientes. O uso da <strong>tinta de demarcação</strong> é muito significativo em vias, rodovias e estradas públicas, tendo em vista que para fazer um boa sinalização horizontal é necessário o uso de uma excelente <strong>tinta de demarcação</strong>, e isso a real sinalização oferece, excelência em tudo o que faz. </p>

                    <h2>SAIBA MAIS SOBRE AS INDICAÇÕES DA TINTA DE DEMARCAÇÃO DA REAL SINALIZAÇÃO. </h2>

                    <p>Usada para asfalto ou piso de concreto, em pátios, estacionamentos, rodovias e até mesmo em pisos industriais que geralmente são áreas de produção, logística e expedição, a <strong>tinta de demarcação</strong> é aplicada para sinalizar tráfego de veículos e pessoas. Vale lembrar que toda a superfície que for pintada com a <strong>tinta de demarcação</strong> deve estar totalmente limpa, inclusive seca, e livre de contaminantes. </p>

                    <p>A <strong>tinta de demarcação</strong> é muito utilizada para fazer símbolos em vias, tais como: faixa de pedestres, linhas contínuas, linhas tracejadas e dizeres que se comunicam com o condutor. Devemos sempre lembrar que, todos os condutores devem ter o total conhecimento referente às regras e leis de trânsito, visto que, é obrigatório saber reconhecer cada símbolo, faixa e placa nas vias, para que assim, seja evitado diversos acidentes e situações de risco. É importante que as pinturas feitas com <strong>tinta de demarcação</strong> estejam bem visíveis aos condutores de veículos e pedestres, para que assim haja uma boa leitura do que está sendo informado. </p>

                    <h3>ADQUIRA JÁ A SUA TINTA DE DEMARCAÇÃO COM A REAL SINALIZAÇÃO, A MELHOR EMPRESA NO SEGMENTO DE SINALIZAÇÃO VIÁRIA.  </h3>

                    <p>A real sinalização está a anos no mercado e se consolidando cada vez mais com seus produtos e serviços, e buscando sempre a satisfação de cada cliente. Desenvolvemos produtos com todo o cuidado e segurança, visando levar o melhor para cada ambiente que será instalado determinado equipamento. Nossa empresa conta com um vasto catálogo de produtos e prestação de serviços. Nossa equipe se dedica dia após dia para a fabricação perfeita de cada produto. </p>

                    <p>Se você busca produtos de qualidade e de excelência, a real sinalização é a empresa certa, entre em contato conosco já!</p>


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