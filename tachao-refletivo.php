<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Tachão Refletivo";
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

                    <p>Usados principalmente em estacionamentos, rodovias e estradas públicas, o <strong>tachão refletivo</strong> tem como principal objetivo manter os condutores seguros de qualquer risco que possa ocorrer no percurso. Tacha refletiva, tachinha refletiva e <strong>tachão refletivo</strong> são praticamente a mesma coisa, porém, possuem objetivos diferentes mas que promovem uma coisa em comum: a segurança! E podemos concordar que a segurança precisa estar acima de qualquer coisa quando se trata de vias, rodovias e estradas. </p>

                    <h2>ENTENDA MAIS SOBRE A DIFERENÇA DO TACHÃO REFLETIVO E PARA QUE SERVE. </h2>

                    <p>O <strong>tachão refletivo</strong> geralmente é fabricado nas cores amarelas ou brancas, com tarjas refletivas que podem variar entre as cores cristal (branco), âmbar(amarelo) ou rubi (vermelho). O <strong>tachão refletivo</strong> da real sinalização é de alta durabilidade e resistência podendo suportar grandes cargas de compressão, com 50mm de altura, 150mm de largura e 250mm de comprimento. O <strong>tachão refletivo</strong> pode ser utilizado para as seguintes ocasiões: </p>

                    <ul>
                        <li>Marcar áreas especiais como: rotatórias, bifurcações, trevos, ciclofaixas;</li>
                        <li>Delimitar locais e trechos de ultrapassagem que não é permitida, como faixas de rolamento;</li>
                        <li>O <strong>tachão refletivo</strong> pode ser utilizado como redutor de velocidade tartaruga (lombada) principalmente nas vias privadas como: condomínios, estacionamentos de empresas, estacionamentos de shoppings entre outros casos.</li>
                    </ul>

                    <p>Devemos lembrar que todas as características do <strong>tachão refletivo</strong> devem estar de acordo com as normas e padrões que foram estabelecidos pelo CONATRAN (Conselho Nacional de Trânsito) que é o órgão responsável pela segurança de condutores e pedestres no trânsito. Podemos concluir que o uso do <strong>tachão refletivo</strong> é, de fato, muito importante e necessário. </p>

                    <h3>COMO GERALMENTE É INSTALADO O TACHÃO REFLETIVO?</h3>

                    <p>Na instalação geralmente é usada uma furadeira com broca número 14, fazendo um furo perto da profundidade mais perto do pino de fixação 5,5 cm. É preferível que se limpe o furo para que saia vestígios de pó e sujeiras, logo após se coloca um catalisador a cola, e se mistura a fim de que seja misturado e preenchido com a sobra. Após todo esse processo, é inserido o tachão no solo, retirando todo o excesso, deve esperar pelo menos 20 minutos para que a cola seque e assim o tráfego seja liberado. Para locais de pavimentos como paver e pedras irregulares geralmente indicamos o tachão que não contém pino.</p>

                    <p>Caso ainda haja dúvidas referente ao tachão e como ele é instalado, entre em contato conosco. Contamos com uma grande equipe de funcionários que estarão prontos para prestar o melhor atendimento e indicar o melhor produto para o ambiente. </p>


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