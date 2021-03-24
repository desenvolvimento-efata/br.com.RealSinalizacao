<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title    	 = "Mensagem Enviada com Sucesso";
    $description = ""; // Manter entre 130 a 160 caracteres
    
?>
<?php include "php/head.php"; ?></head>

<body>
    
    <?php include "php/header.php"; ?>
    
    <main class="main-content">

        <section class="container">
            <h1>Mensagem Enviada com Sucesso</h1>
            <p>Mensagem enviada com sucesso, aguarde que em breve nós entraremos em contato.</p>
            <h3>Continue Navegando em Nosso Site</h3>
            <div class="mapa-do-site">
                <?php include "php/includes/estrutura-site.php"; ?>
            </div>
        </section>
    </main>

    <?php include "php/footer.php"; ?>
    
</body>
</html>