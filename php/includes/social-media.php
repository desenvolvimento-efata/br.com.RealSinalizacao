<?php 
    
    $title_share    = urlencode($title." - ".$nome_empresa);
    $url_twitter    = "https://twitter.com/share?url=".$canonical."&amp;text=".$title_share."%0A";
    $url_facebook   = "https://facebook.com/sharer/sharer.php?u=".$canonical."&amp;text=".$title_share;
    $url_email      = "mailto:?subject=".$title_share."&amp;body=".$canonical;
    $url_whatsapp   = "whatsapp://send?text=".$canonical."%20".$title_share;
    $url_pinterest  = "https://www.pinterest.com/pin/create/button/?url=".$canonical;
    
?>
<div class="redes-sociais-compartilhamento">
    <div class="mensagem-redes-sociais">
        <p>Gostou do conteúdo? Compartilhe: </p>
    </div>
    <div class="botao-rede-social">
        <a target="_blank" href="<?php echo $url_twitter; ?>" class="rede-social-twitter">Twitter</a>
    </div>
    <div class="botao-rede-social">
        <a target="_blank" href="<?php echo $url_facebook; ?>" class="rede-social-facebook">Facebook</a>
    </div>
    <div class="botao-rede-social">
        <a target="_blank" href="<?php echo $url_pinterest; ?>" class="rede-social-pinterest">Pinterest</a>
    </div>
    <div class="botao-rede-social">
        <a target="_self" href="<?php echo $url_email; ?>" class="rede-social-email">E-mail</a>
    </div>
    <div class="botao-rede-social">
        <a target="_self" href="<?php echo $url_whatsapp; ?>" class="rede-social-whatsapp">WhatsApp</a>
    </div>
 </div>