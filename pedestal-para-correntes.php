<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Pedestal para Correntes";
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

                    <p>Certamente você já deve ter visto em algum local e ambiente o <strong>pedestal para correntes</strong>, talvez em algum show, empresa, ou até mesmo em vias públicas e industriais. Falaremos um pouco mais sobre o <strong>pedestal para correntes</strong> que hoje em dia tem sido muito utilizado para diversas funções. A real sinalização é uma empresa totalmente especializada e consolidada no ramo de sinalização viária, e proporciona para todos os clientes os melhores produtos fabricados, disponibilizamos um catálogo com diversos equipamentos que são essenciais e indispensáveis para a sinalização. </p>


                    <h2>CONHEÇA A FUNCIONALIDADE DO PEDESTAL PARA CORRENTES, E SUA IMPORT NCIA NA SINALIZAÇÃO. </h2>

                    <p>O <strong>pedestal para correntes</strong> é usado com o objetivo de demarcar, balizar, isolar determinadas áreas ou interditar ambientes de forma mais rápida e prática, sem contar que se torna uma maneira mais econômica, geralmente o <strong>pedestal para correntes</strong> são fabricados com PVC (policloreto de vinila) que além de ser um material com extrema resistência, é de alta durabilidade. O <strong>pedestal para correntes</strong> tem uma versatilidade gigantesca, haja vista que pode ser facilmente transportado para qualquer lugar, fora que o mesmo leva segurança para o local pois a base que o sustenta é de grande dimensão tornando-o assim, estável quando entre em contato com o solo. </p>

                    <p>O <strong>pedestal para correntes</strong> fabricados pela real sinalização são feitos de acordo com as normas ergonômicas e de segurança para que haja um padrão e segurança, sempre. Empresas que trabalham com obras em ambientes públicos entendem da necessidade e importância que é sinalizar utilizando sempre o <strong>pedestal para correntes</strong>. E devemos frisar que nossos produtos são fabricados com materiais que levam grande resistência, mesmo se exposto a reações adversas como chuva, sol, neblina e granizo. São produtos que possuem alta durabilidade e que como vimos são de grande relevância para a sinalização. </p>

                    <h3>NOS COMPROMETEMOS A LEVAR PRODUTOS E SERVIÇOS COM ALTA QUALIDADE PARA O SEU AMBIENTE! </h3>

                    <p>Se você procura por qualidade, excelência, comprometimento, pontualidade e maestria, está na empresa correta, já que a real sinalização vem por anos estudando o mercado a fim de ser referência no segmento de sinalização viária. Para que seja sempre entregue o melhor, contamos com funcionários treinados, desde a fabricação até as vendas, todos preparados para fabricar o melhor e prestar o melhor atendimento para qualquer cliente ou parceiro. Se você necessita de equipamentos de sinalização, entre em contato conosco, ficaremos felizes em lhe atender, ou até mesmo recebê-los em nossa empresa. </p>



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