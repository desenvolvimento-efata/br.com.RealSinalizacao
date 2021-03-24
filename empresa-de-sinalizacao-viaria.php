<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Empresa de Sinalização Viária";
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

                   <p> Somos uma <strong>empresa de sinalização viária</strong> muito bem consolidada no mercado e por anos fabricamos equipamentos de segurança e prestamos serviços com altíssima excelência a fim de que nossos clientes saiam totalmente satisfeitos após uma parceria fechada conosco. A real sinalização preza pelo bom relacionamento </p>


                    <h2>SE PROCURA UMA EMPRESA DE SINALIZAÇÃO VIÁRIA, A REAL SINALIZAÇÃO É A EMPRESA CERTA! </h2>

                    <p>Ser uma <strong>empresa de sinalização viária</strong> tem suas dificuldades tendo vista que, procuramos dia após dia melhorarmos tudo o que diz respeito a nossa empresa, desde a equipe que trabalha especificamente na fábrica até nossos vendedores, são todos treinados e cientes de todos os produtos e serviços que oferecemos para cada cliente. Por sermos uma <strong>empresa de sinalização viária</strong> temos o compromisso de entregar produtos que ofereçam segurança para o local que for instalado. Não somente no Brasil mas, no mundo todo a sinalização viária é de extrema relevância já que são inúmeros os veículos que circulam todos os dias nas vias e rodovias públicas, uma <strong>empresa de sinalização viária</strong> deve entender e conhecer os equipamentos de trânsito, as leis e regras a serem cumpridas, além de que cada produto precisa ser fabricado de acordo com uma especificação. Como por exemplo as correntes de sinalização que são fabricadas com plástico, de polipropileno que transmitem alta durabilidade e resistência, já as lombadas de borracha são fabricadas de outro material, sendo assim, cada </p>

                    <p>Uma <strong>empresa de sinalização viária</strong> também necessita ter o conhecimento de cada símbolo que deve ter nas vias, rodovias e estradas, fazer a sinalização de maneira correta auxilia o condutor ou pedestre a saber como se comportar diante de alguma situação ou local. Tendo em vista que as cores que foram estudadas e definidas </p>

                    <h3>OPTE SEMPRE POR UMA BOA EMPRESA DE SINALIZAÇÃO VIÁRIA PARA ADQUIRIR SEUS PRODUTOS. </h3>

                    <p>Como uma <strong>empresa de sinalização viária</strong>, estamos comprometidos a entregar produtos com qualidade e no prazo especificado, temos total conhecimento do segmento de sinalização viária e por este motivo nos comprometemos a levar sempre o melhor para seu estacionamento, shopping, condomínio e entre outros locais que deve se ter sinalização viária. Nossa empresa fica localizada no Jardim Adelfiore e estaremos dispostos a lhe atender e </p>

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