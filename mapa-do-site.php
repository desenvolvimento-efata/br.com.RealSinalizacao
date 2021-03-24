<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Mapa do Site";
    $description = "Em nosso mapa do site você encontra todas as páginas do site, confira nossas categorias e informações de nossos produtos e serviços."; // Manter entre 130 a 160 caracteres
    
?>

<?php include "php/head.php"; ?></head>

<body>
    
    <?php include "php/header.php"; ?>
    
    <main class="main-content">
        <section class="container">
            <?php echo $ef->breadcrumb(array($title)); ?>
            <h1><?php echo $title; ?></h1>
            <div class="mapa-do-site">
                <?php include "php/includes/estrutura-site.php"; ?>
            </div>
        </section>
    </main>
    
    <?php include "php/footer.php"; ?>
    
</body>
</html>