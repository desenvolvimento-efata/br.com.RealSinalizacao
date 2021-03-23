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
        <img src="imagens/home/banner.jpg" alt="http://www.realsinalizacao.com.br/" title="http://www.realsinalizacao.com.br/" class="img-responsive">
        <div class="section-info">
            <div class="container">
                <div class="row">
                    <h2>Entre em contato conosco</h2>
                    <div class="col-md-3">
                        <a href="tel:113917-5139" title="Informações">
                            <div class="box-info">
                                <i class="fas fa-phone"></i>
                                <h3>Telefone</h3>
                                <p>(11) 3917-5139</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://wa.me/5511999557929?text=Ol%C3%A1,%20preciso%20de%20informa%C3%A7%C3%B5es" target="_blank" title="Informações">
                            <div class="box-info">
                                <i class="fab fa-whatsapp"></i>
                                <h3>WhatsApp</h3>
                                <p>(11) 99955-7929</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="mailto:contato@realsinalizacao.com.br" title="E-mail">
                            <div class="box-info">
                                <i class="fas fa-envelope"></i>
                                <h3>E-mail</h3>
                                <p>contato@realsinalizacao.com.br</p>
                                <p>realsinalizacao@gmail.com</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="contato.php" title="Contato">
                            <div class="box-info">
                                <i class="fas fa-file-signature"></i>
                                <h3>Solicite Online</h3>
                                <p>Entrar em contato</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="texto-home">
            <div class="container">
                <p><strong>Solução no Trânsito</strong> orientar e informar aos usuários para evitar acidentes, este é o propósito da nossa linha de sinalização Viária. Tachões, Tachas e muito mais para sinalização horizontal, seguindo padrões internacionais de qualidade.</p>
                <p>Nossa linha de tachões e tachinhas é fabricada em resina de poliéster com carga mineral, dentro dos padrões <strong>CET-SP</strong>. Sua instalação deve seguir as normas do <a href="assets/pdf/real-contram.pdf" target="_blank" title="Contran"><strong>CONTRAN</strong></a>, não sendo de nossa responsabilidade o uso em desacordo com a legislação vigente.</p>
            </div>
        </div>
        <div class="section-produtos">
            <div class="container">
                <h2 class="title-home">NOSSOS PRODUTOS</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="box-produto">
                            <div class="box-img">
                                <img src="imagens/produtos/box-1.jpg" alt="Produtos" title="Produtos" class="img-full">
                                <i class="fas fa-road"></i>
                            </div>
                            <div class="content-txt">
                                <h2>Sinalização Viária</h2>
                                <p>Estes produtos possuem pinos de fixação e sua instalação requer cola própria feita a base de resina e catalizador (sua instalação deve ser realizada por mão de obra especializada.</p>
                            </div>
                            <div class="btn-ver-mais">
                                <a href="produto-sinalizacao-viaria.php" title="Sinalização Viária">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-produto">
                            <div class="box-img">
                                <img src="imagens/produtos/box-2.jpg" alt="Produtos" title="Produtos" class="img-full">
                                <i class="fas fa-road"></i>
                            </div>
                            <div class="content-txt">
                                <h2>Tráfego</h2>
                                <p>Solução para isolamento na Pista. Neste modelo, sua base é quadrada. Por sua altura, facilita a visualização do motorista em distâncias consideráveis.</p>
                            </div>
                            <div class="btn-ver-mais">
                                <a href="trafego.php" title="Tráfego"> Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-produto">
                            <div class="box-img">
                                <img src="imagens/produtos/box-3.jpg" alt="Produtos" title="Produtos" class="img-full">
                                <i class="fas fa-road"></i>
                            </div>
                            <div class="content-txt">
                                <h2>Acessórios</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                            <div class="btn-ver-mais">
                                <a href="index.php" title="Acessórios"> Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-produto">
                            <div class="box-img">
                                <img src="imagens/produtos/box-4.jpg" alt="Produtos" title="Produtos" class="img-full">
                                <i class="fas fa-road"></i>
                            </div>
                            <div class="content-txt">
                                <h2>Estrados</h2>
                                <p>Ótima solução para armazenagem e transporte. Recomendado para locais úmidos. Isola contato de pessoas com áreas molhadas.</p>
                            </div>
                            <div class="btn-ver-mais">
                                <a href="estrados.php" title="Estrados"> Saiba Mais</a>
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