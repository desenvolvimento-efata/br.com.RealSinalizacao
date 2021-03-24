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
        <div class="contato">
            <div class="container">
                <div id="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a rel="home" href="<?php echo $url; ?>" title="Home" itemprop="url"><span itemprop="title">Home</span></a> »
                    <div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?php echo $url; ?>contato.php" title="Contato" itemprop="url">
                            <strong><span class="page" itemprop="title">Contato</span></strong>
                        </a>
                    </div>
                </div>
                <h1>Contato</h1>
                <div class="row">
                    <div class="col-md-6">
                        <form class="form-contato">
                            <div class="form-group">
                                <label>Nome: <span class="red-color">*</span></label>
                                <input name="data[Contato][nome]" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>E-mail: <span class="red-color">*</span></label>
                                <input name="data[Contato][email]" type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Telefone: <span class="red-color">*</span></label>
                                <input name="data[Contato][telefone]" type="text" class="form-control mask-phone">
                            </div>
                            <div class="form-group">
                                <label>Selecione um produto: <span class="red-color">*</span></label>
                                <select name="data[Contato][produto]" class="form-control">
                                    <option value=""> -- Selecione uma Opção -- </option>
                                    <option value="Lombada de Borracha">Lombada de Borracha</option>
                                    <option value="Tachão">Tachão</option>
                                    <option value="Tachinhas">Tachinhas</option>
                                    <option value="Bate-Rodas">Bate-Rodas</option>
                                    <option value="Segregadores">Segregadores</option>
                                    <option value="Cones">Cones</option>
                                    <option value="Balizadores">Balizadores</option>
                                    <option value="Placas de Sinalização">Placas de Sinalização</option>
                                    <option value="Tintas de Sinalização">Tintas de Sinalização</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Como nos conheceu? <span class="red-color">*</span></label>
                                <select name="data[Contato][como_conheceu]" class="form-control">
                                    <option value=""> -- Selecione uma Opção -- </option>
                                    <option value="Busca do Google">Busca do Google</option>
                                    <option value="Outros Anúncios">Outros Anúncios</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Indicação">Indicação</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Mensagem: <span class="red-color">*</span></label>
                                <textarea name="data[Contato][mensagem]" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-default btn-block">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3>Real Sinalização</h3>
                        <p><strong>Endereço</strong>: Rua Orco, 143 - Jardim Adelfiore - São Paulo - SP - 05223-110</p>
                        <p><strong>Telefones</strong>: (11) 3917-5139 | (11) 99955-7929 | (11) 99955-7929</p>
                        <p><strong>Email</strong>: contato@realsinalizacao.com.br</p>
                        <p><strong>Email</strong>: realsinalizacao@gmail.com</p>
                        <hr>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.83928723974662!2d-46.73646869318478!3d-23.40887991989285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cefb4304bdbaf1%3A0xb87b3e0618f338f8!2sR.+Orco%2C+143+-+Jardim+Adelfiore%2C+S%C3%A3o+Paulo+-+SP%2C+05223-110!5e0!3m2!1spt-BR!2sbr!4v1554984564949!5m2!1spt-BR!2sbr"
                            class="mapa-contato"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "php/footer.php"; ?>
</body>

</html>