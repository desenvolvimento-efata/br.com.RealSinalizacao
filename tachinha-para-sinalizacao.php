<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Tachinha para Sinalização";
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

                    <p>Se pararmos para pensar e analisar veremos que a indústria de sinalização está crescendo cada dia mais, haja vista que os equipamentos de sinalização viária são extremamente necessários para  a organização do trânsito em qualquer local do mundo. A sinalização viária foi criada com o intuito de trazer mais segurança a todos nós, para que acidentes sejam evitados e que exista menos riscos a condutores e passageiros. As sinalizações horizontais, verticais, sonoras, luminosas e entre outras, são todas relevantes no nosso dia a dia, pois são com elas que temos um norte de para onde devemos ir, qual velocidade seguir, em qual rua devemos virar, e tais ações são tomadas mediante a sinalização que está disponibilizada nas vias, rodovias e estradas públicas. </p>

                    <h2>A IMPORTÂNCIA DA TACHINHA PARA SINALIZAÇÃO. </h2>

                    <p>A <strong>tachinha para sinalização</strong> tem como principal objetivo e função delimitar locais e ambientes e restringir acessos, e devemos nos lembrar também que a <strong>tachinha para sinalização</strong> faz com que os condutores reduzam a velocidade de seu veículo em estacionamentos ou em áreas de risco, assim como alguns outros equipamentos, a <strong>tachinha para sinalização</strong> possui certas características únicas que é importante sabermos antes de comprá-las. Podemos encontrar as tachinhas para sinalizar com cores diferentes como, branca ou amarela, além de que as tachinhas para sinalização podem ser bidirecionais que opera em duas direções, monodirecionais ou cegas, as tachinhas para sinalização possuem refletores que facilitam a visibilidade em locais com pouco luminosidade ou em horários noturnos. </p>

                    <p>É bem comum encontrar tachinhas para sinalização em faixas e bordas de vias. Vale a pena ressaltar que o material que é usado para fabricar a <strong>tachinha para sinalização</strong> é algo bem importante, devido ser fabricada com resina de poliéster apresenta elemento corrosivo à algumas ações da natureza como chuva em excesso e sol muito forte, fora que, as tachinhas suportam grandes compressões mecânicas. Assim como outros equipamentos de sinalização, a <strong>tachinha para sinalização</strong> deve estar de acordo com todas as normas que foram estabelecidas pelo CONTRAN (Conselho Nacional de Trânsito) para que assim, tal equipamento seja considerado seguro. Além de tudo, o cliente deve sempre se preocupar se a empresa que está contratando está seguindo todas as normas e padrões necessários.</p>


                    <h3>FABRICAMOS DIVERSOS PRODUTOS COM A MAIS ALTA QUALIDADE E EXCELÊNCIA. </h3>

                    <p>Certamente a real sinalização é a melhor empresa no segmento de sinalização viária, temos como principal objetivo entregar os melhores produtos e equipamentos para os nossos clientes, e atuar com maestria, sempre! </p>



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