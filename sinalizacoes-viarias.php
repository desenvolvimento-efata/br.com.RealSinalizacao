<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Sinalizações Viárias";
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

                   <p>Em algum momento você já deve ter se perguntado o que são as <strong>sinalizações viárias</strong>, certo? Bom, as <strong>sinalizações viárias</strong> existem por um motivo, que na realidade é trazer consigo a organização e também evitar que ocorram mais acidentes, e por este motivo estas sinalizações precisam através delas passar informações para que os condutores de veículos e pedestres reconheçam o significado de cada desenho feito em vias ou até mesmo cada placa de sinalização que houver no local. </p>

                    <h2>POR QUE AS SINALIZAÇÕES VIÁRIAS SÃO TÃO IMPORTANTES? </h2>

                    <p>As <strong>sinalizações viárias</strong> contribui para um trânsito melhor e mais seguro, não somente no Brasil mas em todo o mundo, através de um bom discernimento do significado de cada sinalização podemos evitar inúmeros acidentes ou situações desconfortáveis nas vias públicas, nas <strong>sinalizações viárias</strong> são utilizados vários símbolos que se tornaram símbolos em comum em diversos países, a partir de 8 de novembro de 1968 em uma convenção de trânsito foi determinado esses símbolos, um acordo que leva o nome de convenção de Viena. Esse acordo sobre as <strong>sinalizações viárias</strong> tem como principal objetivo melhorar o trânsito e não somente para turistas que vão de um país para o outro, mas para empresas que são internacionais. As <strong>sinalizações viárias</strong> são divididas em duas principais sinalizações distintas que são: </p>

                    <ul>
                        <li>Sinalização Vertical: Há a utilização de símbolos, legendas e pictogramas que servem para se comunicar com os condutores e pedestres, esses sinais ficam geralmente fixados em placas que são instaladas em postes do lado direito da pista ou até mesmo suspensas;</li>
                        <li>Sinalização Horizontal: São utilizados desenhos e símbolos nos pavimentos, ou seja, linhas pontilhadas, linhas contínuas, linhas tracejadas somente de um lado da pista, faixa de pedestre e entre outros símbolos que podem ser utilizados para comunicar-se. </li>
                    </ul>

                    <p>É de  extrema importância que os condutores saibam sobre as <strong>sinalizações viárias</strong>, e sobre as demarcações que cada uma possui. </p>

                    <h3>A REAL SINALIZAÇÃO É UMA EMPRESA ESPECIALIZADA EM SINALIZAÇÕES VIÁRIAS, ENTRE EM CONTATO AGORA MESMO! </h3>

                    <p>Fora as sinalizações verticais e horizontais temos mais algumas sinalizações que são essenciais para manter a ordem no trânsito que são as sinalizações: sonoras, luminosas, gestual e os dispositivos auxiliares. Todas as sinalizações foram criadas pensando em evitar acidentes. A real sinalização por ser uma empresa com total conhecimento das leis e regras do assunto, disponibiliza dos melhores equipamentos para a sinalização viária, temos uma equipe especializada que estará pronta para lhe atender e prestar o melhor atendimento. </p>


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