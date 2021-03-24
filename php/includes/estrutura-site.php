<ul>
    <li><a href="<?php echo $url; ?>index" title="Página inicial">Home</a></li>
    <li><a href="<?php echo $url; ?>empresa" title="Empresa">Empresa</a></li>
    <li>
        <a href="<?php echo $url; ?>produtos" title="Produtos">Produtos</a>
        <ul class="sub-menu">
            <li><a href="<?php echo $url; ?>produto-sinalizacao-viaria" title="Sinalização Viária">Sinalização Viária</a></li>
            <li><a href="<?php echo $url; ?>trafego" title="Tráfego">Tráfego</a></li>
            <li><a href="<?php echo $url; ?>index" title="Acessórios">Acessórios</a></li>
            <li><a href="<?php echo $url; ?>estrados" title="Estrados">Estrados</a></li>
        </ul>
    </li>   
    <li><a href="<?php echo $url; ?>contato" title="Contato">Contato</a></li>                
    <li><a href="<?php echo $url; ?>assets/pdf/manual-de-instalacao.pdf" target="_blank" title="Manual de Instalação">Manual de Instalação</a></li>
    <li><a href="<?php echo $url; ?>informacoes" title="Informações">Informações</a>
        <ul>
            <?php echo $ef->subMenu($palavras_chave); ?>
        </ul>
    </li>
</ul>