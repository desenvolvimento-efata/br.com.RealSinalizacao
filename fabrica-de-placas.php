<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Fábrica de Placas";
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

                    <p>A real sinalização além de ser uma <strong>fábrica de placas</strong> é uma empresa especializada em sinalização viária e em prestar serviços voltados a este segmento, detemos de todo o conhecimento e assim, sendo uma excelente <strong>fábrica de placas</strong> e diversos outros equipamentos que são indispensáveis na sinalização viária não somente nos dias de hoje mas desde que a sinalização foi estabelecida no mundo todo. Devemos lembrar que, a sinalização viária foi criada a fim de levar organização ao trânsito, proporcionando um número muito menor de acidentes e riscos para condutores e pedestres que transitam pelo local. </p>


                    <h2>ENTENDA O QUE SÃO AS PLACAS DE REGULAMENTAÇÃO E PARA QUE SERVE.</h2>

                    <p>Por sermos uma <strong>fábrica de placas</strong>, temos como obrigação saber ler cada significado que é passado através de placas e símbolos. Tendo isso em mente precisamos esclarecer o que é as placas de regulamentação e o porquê é tão importante comprar com a melhor <strong>fábrica de placas</strong>, é importante frisar que todos os condutores devem ter o total conhecimento das leis de trânsito para que assim, seja evitado acidentes. </p>

                    <p>As placas de regulamentação são todas aquelas que se comunicam através de proibições, restrições e obrigações que os condutores devem ter, geralmente essas placas são de formato redondo com o fundo pintado de branco e as bordas de branco, exceto as de “parada obrigatória” e as “dê preferência”. O número total de placas de regulamentação são 31 placas, e o desrespeito a essas placas faz com que os condutores estejam em risco de multas, pontos, e outras medidas administrativas, cometendo assim infração de trânsito. É necessário cotar orçamentos e assim comprar com a melhor <strong>fábrica de placas</strong> que, certamente, é a real sinalização. </p>


                    <h3>ENTRE EM CONTATO COM A MELHOR FÁBRICA DE PLACAS E ADQUIRA JÁ A SUA!</h3>

                    <p>A real sinalização é uma <strong>fábrica de placas</strong> que se preocupa com cada cliente e parceiro, produzindo assim, produtos com altíssima qualidade, resistência e durabilidade, sabemos a importância de tais equipamentos e reconhecendo isso, procuramos sempre entregar o melhor para cada vocês, por sermos uma grande <strong>fábrica de placas</strong> procuramos manter a qualidade e entregar o melhor atendimento a vocês, contamos com diversos funcionários qualificados e treinados para tirar todas as dúvidas que possam surgir referente aos produtos e serviços prestados. </p>

                    <p>Entre em contato conosco através dos telefones ou email que estão disponíveis no site, ou venha nos fazer uma visita, será uma honra atendê-los. </p>

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