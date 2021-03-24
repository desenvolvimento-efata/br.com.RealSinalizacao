<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Fábrica de Tachão";
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

                    <p>A real sinalização é uma <strong>fábrica de tachão</strong> muito bem consolidada no mercado atualmente, proporcionando produtos de qualidade e resistentes a qualquer reação que posso ter no local como, reações adversas e ambientes. </p>

                    <p>É necessário que cada condutor de veículo entenda sobre a sinalização viária e obtenha o total conhecimento sobre as leis e regras da sinalização viária e sobre todos os símbolos e equipamentos usados nas ruas, vias, rodovias e estradas, é válido lembrar que, a sinalização viária foi criada com o principal objetivo de manter a organização e ordem no trânsito, proporcionando assim segurança para todos os condutores e pedestres. Por este motivo a real sinalização que é <strong>fábrica de tachão</strong> está no mercado para proporcionar os melhores equipamentos utilizados na sinalização viária. </p>

                    <h2>A IMPORTâNCIA DE UMA EXCELENTE FÁBRICA DE TACHÃO</h2>

                    <p>Para ser uma boa <strong>fábrica de tachão</strong> precisa primeiramente entender sobre as normas e leis indicadas na sinalização viária, para ser uma boa <strong>fábrica de tachão</strong> é necessário ter um bom estudo referente a todos os equipamentos utilizados normalmente na sinalização de trânsito, é fundamental que uma <strong>fábrica de tachão</strong> produza equipamentos de acordo com as normas exigidas pelos órgãos administrativos nacionais. Os tachões refletivos são usados normalmente para demarcar vias onde a ultrapassagem de veículos é totalmente proibida, é usado também em ciclofaixas, rotatórias, trevos e em outros locais. É necessário lembrar que, uma <strong>fábrica de tachão</strong> deve saber e instruir ao cliente que o tachão refletivo não pode ser instalado em vias pavimentadas a fim de reduzir a velocidade de carros, muito menos em ondulações transversais. </p>

                    <p>O tachão refletivo pode ter diversas variações como, monodirecional que reflete e sinaliza somente um lado, bidirecional que sinaliza e reflete os dois lados e cego. Podendo ser fabricado os refletivos nas determinadas cores: âmbar, cristal e rubi. É necessário que o tachão tenha uma alta durabilidade e resistência, já que o mesmo será exposto a céu aberto, podendo receber chuvas intensas, granizos e sol de alta intensidade, fora que, está propício a receber altas cargas, como um caminhão por exemplo. </p>

                    <h3>ADQUIRA SEUS PRODUTOS COM A MELHOR FÁBRICA DE TACHÃO!  </h3>

                    <p>Por sermos uma <strong>fábrica de tachão</strong> temos como dever produzir equipamentos de qualidade, e prestar serviços com excelência. Estamos em constante evolução, procurando sempre melhorar em cada ponto, nossa empresa conta com funcionários preparados e treinados para prestar o melhor atendimento e fabricar os melhores produtos, a fim de que não tenhamos somente clientes, e sim parceiros. </p>
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