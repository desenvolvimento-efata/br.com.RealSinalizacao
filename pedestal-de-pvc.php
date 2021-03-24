<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Pedestal de PVC";
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

                    <p>A empresa Real Sinalização por estar há muito tempo no mercado gerou um relacionamento com os clientes a base de confiança e respeito, prezamos sempre pela satisfação de cada cliente que, ao entrar em contato conosco tenha o melhor atendimento e, ao realizar uma compra leve consigo os melhores produtos para sinalização viária, inclusive o <strong>pedestal de pvc</strong> que tem se tornado cada vez mais utilizado em diversos locais e para que você entenda a necessidade dos pedestais falaremos abaixo mais um pouco sobre o <strong>pedestal de pvc</strong> e sua importância. </p>

                    <H2>O PEDESTAL DE PVC TEM SIDO MUITO USADO EM LOCAIS QUE PRECISAM DE SINALIZAÇÃO. </H2>

                    <p>Blitz, shows, entrada de empresas, entrada ou saída de estacionamentos têm sido alguns dos principais lugares onde o <strong>pedestal de pvc</strong> está sendo instalado para separar locais. Sem contar que, o <strong>pedestal de pvc</strong> é um produto que tem bastante resistência por ser fabricado com policloreto de polivinila ou policloreto de vinil o famoso pvc, essa matéria-prima é constituída por uma combinação de etileno e cloro, podemos também destacar que o material que é feito o <strong>pedestal de pvc</strong> é considerado algo versátil por conta da possibilidade de acrescentar outros produtos na sua fabricação como, plastificantes, estabilizantes, lubrificantes, pigmentos, etc.</p>

                    <p>O <strong>pedestal de pvc</strong> pode ser colocado em manifestações ou até mesmo em algumas cerimônias que necessitam a separação de pessoas no local, então vale a pena ressaltar a enorme importância que tal equipamento possui hoje em dia. Nossos pedestais de sinalização possuem 2 ganchos na parte externa para que seja possível a colocação de correntes, fabricamos cada produto com total cuidado e segurança a fim de que nossos clientes saiam totalmente satisfeitos da nossa empresa. Além dos pedestais oferecemos um catálogo cheio de produtos de sinalização, tais como, lombadas de borracha, tinta para estacionamento, tinturas PNE e pinturas PCD, tachão de trânsito, redutor de velocidade, bate rodas, cones de sinalização de borracha e entre outros produtos que fabricamos em nossa empresa. </p>

                    <h3>O MELHOR PEDESTAL DE PVC SEM DÚVIDAS É NA REAL SINALIZAÇÃO! </h3>

                    <p>Se você procura <strong>pedestal de pvc</strong> ou até mesmo outros equipamentos para sinalização, você está na empresa certa, temos amor por este segmento e por esse e outros motivos temos nos tornado referência no segmento de sinalização viária. Então não perca mais tempo, entre em contato conosco via telefone ou email, ou venha nos visitar em nossa empresa, certamente terá funcionários prontos e prestar o melhor atendimento. </p>


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