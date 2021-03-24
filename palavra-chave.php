<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Palavra Chave";
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

                    <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit. Perferendis ipsam ea tempora accusamus quasi numquam architecto sequi ducimus minima enim facere temporibus quaerat rerum laudantium vel quas, exercitationem impedit in perspiciatis voluptatum soluta. Aut deserunt pariatur, cum vitae obcaecati facilis assumenda sunt animi aspernatur, atque nihil itaque necessitatibus laudantium rerum accusamus. Pariatur minima veritatis quaerat, aliquid delectus saepe illo porro adipisci id ab ullam beatae commodi dignissimos qui debitis. Blanditiis delectus exercitationem nostrum dolores numquam rerum fugiat porro quaerat beatae ducimus, culpa reprehenderit temporibus ipsum facere suscipit, voluptatem earum cupiditate a sunt aliquam. Deleniti rerum dolores, a facilis, consequuntur incidunt?</p>
                    <h2>Sub título 1</h2>
                    <p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Odit quis alias tempora repellendus dignissimos voluptates quibusdam quaerat autem possimus. Aliquam illum mollitia consequatur, dolorum blanditiis, aperiam temporibus, alias aliquid, animi rem quis inventore? Iste sit asperiores, doloribus excepturi, ipsa reiciendis quidem libero expedita rerum, pariatur dolore cupiditate voluptatibus voluptas. Neque!</p>
                    <h3>Sub título 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Sequi soluta harum</strong> placeat vel dolore eveniet at qui ratione ea commodi veritatis, consequatur delectus accusantium, cum. Suscipit dignissimos, cumque ut debitis architecto impedit sit soluta veniam error veritatis consequatur totam ipsum consectetur unde temporibus vel delectus. Aliquam ad impedit atque voluptas.</p>

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