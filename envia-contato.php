<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Envia Contato";
    $description = "Mensagem enviada com sucesso."; // Manter entre 130 a 160 caracteres

?>

<?php include "php/head.php"; ?></head>

<body>
    
    <?php include "php/header.php"; ?>
    
    <main class="main-content">
        <section class="container text-justify">
            <?php echo $ef->breadcrumb(array($title)); ?>
            <h1><?php echo $title; ?></h1>
            <br>
            <h2 class="text-center">Contato Enviado com Sucesso!</h2>
            <br>
            <p>Continue navegando em nosso site, selecione uma página abaixo.</p>
            <div class="sitemap">
                <?php include "includes/estrutura-site.php"; ?>
            </div>
        </section>
    </main>
    
    <?php include "php/footer.php"; ?>
    
</body>
</html>