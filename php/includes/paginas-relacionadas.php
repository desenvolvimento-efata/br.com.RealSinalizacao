<section class="paginas-relacionadas">
    <h5>Quem acessou a página <?php echo $title; ?>, também acessou:</h5>
    <div class="row">
        <?php 
            echo $ef->listaThumbs(
                $palavras_chave, array(
                    "random" => true,
                    "limit" => 4,
                    "class_div" => "col-xs-6 col-sm-4 col-md-3 col-lg-3",
                    "title_tag" => "h6"
                )
            );
        ?>
    </div>
</section>