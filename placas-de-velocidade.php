<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Placas de Velocidade";
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

                    <p><strong>placas de velocidade</strong>, se você dirige ou pilota qualquer veículo certamente já viu uma placa dessa, e se você já andou de passageiro também reconhece as <strong>placas de velocidade</strong>. Na verdade, elas estão lá para comunicar-se com os condutores e orientar a velocidade permitida naquele local. Falaremos mais sobre a funcionalidade e relevância que essas placas possuem desde antigamente até os dias de hoje.  </p>

                    <h2>PLACAS DE VELOCIDADE: QUAL É O SEU SIGNIFICADO? </h2>

                    <p>Se estudarmos a fundo sobre o assunto, saberemos que as placas foram aprovadas em 26 de agosto de 2005 pela resolução do CONTRAN Nº 180. As placas de sinalização viária explicam para cada sinal ali representado o seu significado e normalmente as placas são para informar os condutores sobre condições das vias, obrigações, proibições e é necessário que cada condutor reconheça e saiba ler o significado de cada placa que esteja no local. As <strong>placas de velocidade</strong> por exemplo, indicam a velocidade máxima permitida naquela via e que se não for obedecida, o condutor estará cometendo uma infração de trânsito, podendo levar multas, pontos na carteira e entre outras medidas administrativas. </p>

                    <p>A sinalização viária e as <strong>placas de velocidade</strong> não são algo novo, teve início no começo do século XX a começar por algumas marcas de pneus como Pirelli e Michelin que teve como marco inicial os EUA e Itália. Em 8 de novembro de 1968 houve um acordo onde foi estabelecido que alguns países teriam praticamente a mesma sinalização viária, que chamamos de convenção de Viena. Não são todos os países que adotaram esse tipo de acordo, o que acaba confundindo alguns turistas que não conhecem a sinalização daquele local. É indispensável que os condutores conheçam as <strong>placas de velocidade</strong>, pois assim, poderá diminuir muito os riscos e números de acidentes. Cada rua, via, rodovia e estrada possui uma velocidade determinada diferente, tudo depende das condições do local, por exemplo, em locais que existam curvas demais, é certo que as <strong>placas de velocidade</strong> estarão indicando uma velocidade menor e, em vias que são retas, e de maior tráfego, geralmente a velocidade será maior.</p>

                    <h3>ADQUIRA SUAS PLACAS DE VELOCIDADE COM A REAL SINALIZAÇÃO! </h3>

                    <p>Além das <strong>placas de velocidade</strong>, produzimos também placas de lombada, tachões de sinalização, lombadas de borracha, tachas refletivas e diversos outros equipamentos para sinalização viária. Procure um de nossos atendentes e solicite um catálogo, temos uma grande variedade de produtos e prestação de serviço, para que assim, possamos atender todas as suas necessidades. </p>


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