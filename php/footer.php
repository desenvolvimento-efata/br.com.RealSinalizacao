<footer>
    <div class="faixa-contato">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h3>Entre em Contato conosco</h3>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="btn-faixa">
                            <a href="contato.html" title="Entre em Contato">Entre em Contato</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="imagens/logo-footer.png" alt="Real Sinalização" title="Real Sinalização" class="img-responsive">
                </div>
                <div class="col-md-4">
                    <h4>Endereço</h4>
                    <p>Rua Orco, 143 - Jardim Adelfiore<br>
                        São Paulo - SP - CEP: 05223-110</p>
                    </div>
                    <div class="col-md-3">
                        <h4>Institucional</h4>
                        <ul>
                            <li><a href="index.php" title="Página inicial">Home</a></li>
                            <li><a href="empresa.php" title="Empresa">Empresa</a></li>
                            <li><a href="produtos.php" title="Produtos">Produtos</a></li>	
                            <li><a href="contato.php" title="Contato">Contato</a></li>
                            <li><a href="mapa-do-site.php" title="Mapa do Site">Mapa do Site</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h4>Contatos</h4>
                        <a href="#" title=""><i class="fab fa-facebook-f"></i></a>
                        <span class="divisor"></span>
                        <a href="ttps://wa.me/5511999557929?text=Olá,%20preciso%20de%20informações" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        <span class="divisor"></span>
                        <a href="mailto:contato@realsinalizacao.com.br" title="email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; 2021 Real Sinalização - Todos os direitos reservados.</p>
                    </div>

                    <div class="col-md-6">
                        <p>Desenvolvido por: Agência Inovvary Marketing Digital</p>
                    </div>
                </div>
            </div>
        </div>
        <ul class="menu-footer-mobile">
            <li><a href="tel:113917-5139" class="mm-call" title="Ligue"></a></li>
            <li><a href="https://api.whatsapp.com/send/?phone=5511999557929&text&app_absent=0" class="mm-whatsapp" title="Whats App"></a></li>
            <li><a href="mailto:contato@realsinalizacao.com.br" class="mm-email" title="E-mail"></a></li>
            <li><button type="button" class="mm-up-to-top" title="Volte ao Topo"></button></li>
        </ul>
    </footer>
<?php if($_SERVER["SERVER_NAME"] != "localhost"){ ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-44CKXXFZCY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-44CKXXFZCY');
</script>
<?php } ?>
<script type="text/javascript"><?php echo $ef->JS(); ?></script>