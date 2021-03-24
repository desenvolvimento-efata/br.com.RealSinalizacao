<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Conão de Sinalização";
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

                    <p>Sabemos que é necessário todos os condutores de veículos ter o conhecimento das leis de trânsito, e isso inclui ter o conhecimento dos equipamentos e símbolos que são utilizados na sinalização viária como o <strong>conão de sinalização</strong>, as lombadas de borracha, as placas e diversas outras sinalizações que são diariamente vistas pelos condutores e pedestres. </p>

                    <p>O <strong>conão de sinalização</strong> também pode ser popularmente conhecido como canalizador de tráfego, e é importante dizer que existem normas e leis obrigando a utilização do <strong>conão de sinalização</strong>, e que caso não seja usado, pode ocorrer acidentes gravíssimos.</p>

                    <h2>ENTENDA MAIS SOBRE O <strong>conão de sinalização</strong> E A SUA IMPORT NCIA NO TRÂNSITO. </h2>

                    <p>O <strong>conão de sinalização</strong> (canalizador de tráfego) é de extrema importância já que realiza a sinalização de obras e também sinaliza perigos à frente como buracos, por exemplo. Alguns cones possuem faixas refletivas para que facilite a visibilidade em locais com pouca luminosidade ou em horários noturnos, podendo ser fabricado em cores diferentes como, laranja com faixas brancas e preto com faixas amarelas. Vale a pena ressaltar que para que você tenha uma boa sinalização é necessário procurar uma empresa que segue as normas e padrões estabelecidos pelos órgãos administrativos de trânsito, já que somente seguindo essas normas o objeto de fato passará a segurança necessária e que lhe foi imposta. </p>

                    <p>O <strong>conão de sinalização</strong>, pode facilmente ser transportado, haja vista que o mesmo permite ser empilhado, economizando assim um bom espaço, além de que o <strong>conão de sinalização</strong> é leve, tornando um bom aliado no momento de sinalizar determinados locais. Se caso precise de mais estabilidade no <strong>conão de sinalização</strong>, é possível preenchê-los com areia ou água tornando-os mais firmes no pavimento. Após falarmos de tantas vantagens que o conão possui, não podemos deixar de falar da maior vantagem que ele oferece, que é proporcionar segurança para pedestres e veículos, ao comunicar que a frente pode haver perigos e obstáculos na via. </p>

                    <h3>VENHA CONHECER A REAL SINALIZAÇÃO, A MAIOR EMPRESA DE SINALIZAÇÃO VIÁRIA DO MERCADO! </h3>

                    <p>Caso esteja procurando produtos e serviços de qualidade, não hesite em nos contatar, estamos à disposição para oferecer os melhores serviços e equipamentos fabricados com excelência e maestria. Nossos funcionários são treinados para que entre o melhor atendimento possível para cada cliente e parceiro nosso. </p>

                    <p>Ficamos localizados em São Paulo, mais precisamente no Jardim Adelfiore, venha nos fazer uma visita e conhecer mais a empresa e os produtos que oferecemos com tanta qualidade a você. </p>

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