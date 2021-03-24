<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title    	 = "";
    $description = ""; // Manter entre 130 a 160 caracteres
    
?>

    <?php include "php/head.php"; ?>

<body>

    <?php include "php/header.php"; ?>
    <main class="main-content">
        <div class="produtos">
            <div class="container">
                <div id="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a rel="home" href="<?php echo $url; ?>index.html" title="Home" itemprop="url"><span itemprop="title">Home</span></a> »
                    <div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?php echo $url; ?>produtos.html" title="Produtos" itemprop="url">
                            <strong><span class="page" itemprop="title">Produtos</span></strong>
                        </a>
                    </div>
                </div>
                <h1>Produtos</h1>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="box-produto">
                            <div class="box-img">
                                <img src="<?php echo $url; ?>imagens/produtos/box-1.jpg" alt="Produtos" title="Produtos" class="img-full">
                                <i class="fas fa-road"></i>
                            </div>
                            <div class="content-txt">
                                <h2>Sinalização Viária</h2>
                                <p>Estes produtos possuem pinos de fixação e sua instalação requer cola própria feita a
                                    base de resina e catalizador (sua instalação deve ser realizada por mão de obra
                                    especializada.</p>
                            </div>
                            <div class="btn-ver-mais">
                                <a href="<?php echo $url; ?>produto-sinalizacao-viaria" title="Sinalização Viária">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-produto">
                            <div class="box-img">
                                <img src="<?php echo $url; ?>imagens/produtos/box-2.jpg" alt="Produtos" title="Produtos" class="img-full">
                                <i class="fas fa-road"></i>
                            </div>
                            <div class="content-txt">
                                <h2>Tráfego</h2>
                                <p>Solução para isolamento na Pista. Neste modelo, sua base é quadrada. Por sua altura,
                                    facilita a visualização do motorista em distâncias consideráveis.</p>
                            </div>
                            <div class="btn-ver-mais">
                                <a href="<?php echo $url; ?>trafego" title="Tráfego"> Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-produto">
                            <div class="box-img">
                                <img src="<?php echo $url; ?>imagens/produtos/box-3.jpg" alt="Produtos" title="Produtos" class="img-full">
                                <i class="fas fa-road"></i>
                            </div>
                            <div class="content-txt">
                                <h2>Acessórios</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                            <div class="btn-ver-mais">
                                <a href="<?php echo $url; ?>" title="Acessórios"> Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-produto">
                            <div class="box-img">
                                <img src="<?php echo $url; ?>imagens/produtos/box-4.jpg" alt="Produtos" title="Produtos" class="img-full">
                                <i class="fas fa-road"></i>
                            </div>
                            <div class="content-txt">
                                <h2>Estrados</h2>
                                <p>Ótima solução para armazenagem e transporte. Recomendado para locais úmidos. Isola
                                    contato de pessoas com áreas molhadas.</p>
                            </div>
                            <div class="btn-ver-mais">
                                <a href="<?php echo $url; ?>estrados" title="Estrados"> Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "php/footer.php"; ?>
</body>

</html>