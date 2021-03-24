<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Placa de Sinalização Viária";
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

                    <p>Vamos começar com o mais importante, para que serve a <strong>placa de sinalização viária</strong>? Podemos destacar que a <strong>placa de sinalização viária</strong> tem como principal objetivo informar algo em vias, rodovias, estradas, obras e entre outras ocasiões e, tem como grande objetivo também manter a ordem e segurança no trânsito. As placas geralmente são vistas suspensas ou nas laterais de vias e é dever do condutor ter conhecimento das mensagens em que placas passam em determinadas situações, haja vista que foi instruído anteriormente sobre o assunto. </p>

                    <h2>PLACA DE SINALIZAÇÃO VIÁRIA: VOCÊ SABE OS SEUS SIGNIFICADOS? </h2>

                    <p>O Código de Trânsito Brasileiro defende a ideia de que se os condutores e pedestres saberem ler a <strong>placa de sinalização viária</strong> corretamente o trânsito terá uma maior fluidez, e sem contar que haverá uma queda nos acidentes de trânsitos. A sinalização viária não é algo que foi criado recentemente, e sim no começo do século xx e o que todos precisam entender é que ter conhecimento das leis de trânsito e saber reconhecer o significado da grande maioria da <strong>placa de sinalização viária</strong> é de extrema importância. A Real sinalização conta com uma grande equipe de profissionais que fabricam equipamentos de excelência, inclusive a <strong>placa de sinalização viária</strong>, e é importante sabermos da importância que a mesma possui e que acaba nos trazendo tanta segurança. </p>

                    <p>Existem 7 tipos de placas de sinalização viária, e que podem ser classificadas de diversos modelos, cores e entre outras exigências como, placas de regulamentação servem para informar proibições, condições ou até mesmo restrições da via e são classificadas como fundo branco com borda vermelha. Há também as placas de advertência que são amarelas e existem para advertir o condutor de possíveis riscos e situações perigosas, já as placas de sinalização de indicação tem como finalidade indicar locais e orientar aos condutores o caminho certo, as placas educativas informa reações adversas e contribui para a segurança no trânsito. As placas de serviços auxiliares mostram que pode haver serviços de apoio na via, as placas de sinalização de obras são geralmente utilizadas para mostrar que há obras mais à frente do local, já as placas de atrativo turístico indica locais turísticos na região, e por fim, a sinalização horizontal que tem como objetivo indicar as sinalizações através de cores. </p>

                    <h3>ADQUIRA SUA PLACA DE SINALIZAÇÃO VIÁRIA COM A MELHOR EMPRESA DO SEGMENTO! </h3>

                    <p>Se você procura <strong>placa de sinalização viária</strong> de excelente qualidade e feita com toda a segurança e cuidado, a Real Sinalização é a empresa correta, tendo vista que temos um vasto catálogo que permite variações entre os produtos, produzimos sua <strong>placa de sinalização viária</strong> de acordo com todas as exigências. Venha nos visitar!</p>

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