<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Correntes de Plástico";
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

                    <p>Você sabe para que serve as <strong>correntes de plástico</strong>? Bom, falaremos um pouco sobre a sinalização viária e como as <strong>correntes de plástico</strong> são tão importantes quando o assunto é delimitar locais e sinalizar caminhos. É importante lembrarmos que, para se manter a organização no trânsito de qualquer local, seja ele um estacionamento, uma via, ou rodovia pública, deve-se existir algo que direcione os veículos e pedestres e esse conjunto de regras e leis se encaixam na sinalização viária, na qual a real sinalização é uma empresa especializada no assunto. </p>

                    <h2>PEDESTAIS, HASTES E CORRENTES DE PLÁSTICO SE TORNARAM EQUIPAMENTOS OBRIGATÓRIOS EM EMPRESAS. </h2>

                    <p>Tendo em vista que o Brasil é um dos países que mais possui acidentes de trabalho,  pedestais, <strong>correntes de plástico</strong> e hastes se tornaram parte dos EPCs e são de extrema importância para preservar a ordem de pessoas e locais. Tais equipamentos geralmente são utilizados para delimitar espaços e indicar caminhos. É válido lembrar que para cada local haverá uma necessidade diferente, em locais internos por exemplo podemos fazer a utilização de pedestais com correntes leves que sejam de fácil locomoção. As <strong>correntes de plástico</strong>s também são muito usadas em shows e feiras culturais para separar filas e delimitar os ambientes</p>

                    <p>As <strong>correntes de plástico</strong> são fabricadas de polietileno que, quimicamente é o polímero mais simples que existe e que é de alta produção mundial. A real sinalização se preocupa com cada equipamento fabricado na empresa, com a intenção de levar sempre o melhor para o seu ambiente, contamos com profissionais totalmente qualificados e empenhados a produzir não somente as <strong>correntes de plástico</strong>, mas diversos outros produtos de sinalização viária. Então, sem sombra de dúvidas, a real sinalização se preocupa com cada cliente e parceiro, visando sempre uma parceria de longa duração e proporcionando incríveis experiências com nossos produtos e serviços. </p>


                    <h3>FABRICAMOS CORRENTES DE PLÁSTICO PARA SINALIZAÇÃO VIÁRIA.</h3>

                    <p>Podemos utilizar as <strong>correntes de plástico</strong> em diversos locais como citado acima e para que as <strong>correntes de plástico</strong> se tornem visíveis as cores geralmente são amarelas e pretas. Para limpar as correntes é importante sempre usar água e sabão neutro. É importante sempre mantê-las limpas e guardadas em locais secos e arejados para que tenha uma maior vida útil. </p>

                    <p>Os produtos da real sinalização são de extrema excelência e maestria, sempre pensando no melhor para cada cliente. Contamos com funcionários treinados para lhe prestar o melhor atendimento e sanar todas as dúvidas que possam surgir sobre nossos serviços e equipamentos. </p>


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