<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "404";
    $description = "Página não encontrada."; // Manter entre 130 a 160 caracteres

?>

<?php include "php/head.php"; ?></head>

<body>
    
    <?php include "php/header.php"; ?>
    
    <main class="main-content">
        <section class="container">
            <?php echo $ef->breadcrumb(array($title)); ?>
            <h1><?php echo $title; ?> - Ops!</h1>
            <h2>Página não encontrada</h2>
            <p>A página que você estava procurando não foi encontrada.</p>
            <p>Por favor, clique em uma página abaixo.</p>
            <div class="mapa-do-site">
                <?php include "php/includes/estrutura-site.php"; ?>
            </div>
        </section>
    </main>
    
    <?php include "php/footer.php"; ?>
    
</body>
</html>