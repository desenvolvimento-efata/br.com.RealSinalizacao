<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Informações";
    $description = "Em nossa página de informações você encontra diversos produtos e serviços, confira nossas categorias e informações de nossos produtos e serviços."; // Manter entre 130 a 160 caracteres

?>

<?php include "php/head.php"; ?></head>

<body>
    
    <?php include "php/header.php"; ?>
    
    <main class="main-content">
        <section class="container">
            <?php echo $ef->breadcrumb(array($title)); ?>
            <h1><?php echo $title;?></h1>
            <p>Confira abaixo informações relacionadas aos produtos e/ou serviços da empresa <strong><?php echo $nome_empresa; ?></strong>:</p>
            <div class="row lista-thumbs">
                <?php echo $ef->listaThumbs($palavras_chave, array(
                    "class_div" => "col-xs-6 col-sm-4 col-md-3 col-lg-3"
                )); ?>
            </div>
        </section>
    </main>
    
    <?php include "php/footer.php"; ?>
    
</body>
</html>