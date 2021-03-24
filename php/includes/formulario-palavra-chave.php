<h2 class="text-center">Fale Conosco!</h2>
<div class="row">
    <div class="col-xs-6 col-md-7">
        <form class="form-contato-palavra-chave">
            <div class="form-group">
                <label><span class="red-color">*</span> Nome:</label>
                <input name="data[Contato][nome]" type="text" class="form-control" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label><span class="red-color">*</span> Telefone: </label>
                <input name="data[Contato][telefone]" type="text" class="form-control mask-phone">
            </div>
            <div class="form-group">
                <label><span class="red-color">*</span> Mensagem: </label>
                <textarea name="data[Contato][mensagem]" class="form-control" rows="3"></textarea>
            </div>
            <?php if($captcha){ ?>
            <div class="g-recaptcha" data-sitekey="<?php echo $captcha_key_client_side; ?>"></div>
            <?php } ?>
            <button type="submit" class="btn btn-default btn-block btn-send">Enviar</button>
        </form>
    </div>
    <div class="col-xs-6 col-md-5">
        <h4>Nossos Telefones</h4>
        <p>(<?php echo $unidades[1]["ddd"]; ?>) <?php echo $unidades[1]["telefone"]; ?></p>
        <hr>
        <h4>Nossos E-mails</h4>
        <p><?php echo $email_contato; ?></p>
    </div>
</div>