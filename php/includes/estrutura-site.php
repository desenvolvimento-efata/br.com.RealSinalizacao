<ul>
    <li><a href="<?php echo $url; ?>" title="Página inicial">Home</a></li>
    <li><a href="<?php echo $url; ?>sobre-nos" title="Sobre Nós">Sobre Nós</a></li>
    <li>
        <a href="<?php echo $url; ?>servicos" title="Serviços">Serviços</a>
        <ul>
            <li><a href="<?php echo $url; ?>" title="Serviço_1">Serviço_1</a></li>
            <li><a href="<?php echo $url; ?>" title="Serviço_2">Serviço_2</a></li>
            <li><a href="<?php echo $url; ?>" title="Serviço_3">Serviço_3</a></li>
            <li><a href="<?php echo $url; ?>" title="Serviço_4">Serviço_4</a></li>
            <li><a href="<?php echo $url; ?>" title="Serviço_5">Serviço_5</a></li>
        </ul>
    </li>
    <li><a href="<?php echo $url; ?>contato" title="Contato">Contato</a></li>
    <li><a href="<?php echo $url; ?>informacoes" title="Informações">Informações</a>
        <ul>
            <?php echo $ef->subMenu($palavras_chave); ?>
        </ul>
    </li>
</ul>