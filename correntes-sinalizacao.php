<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Correntes Sinalização";
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
                    <p>Por anos temos desenvolvido produtos de qualidade e nos preocupamos muito com cada equipamento e produto que é produzido e entregue na nossa empresa para os nossos clientes, visamos desde sempre ser uma empresa referência quando o assunto é sinalização viária, e dia após dia vamos aprimorando detalhes para que cada produto seja entregue com maestria a vocês! As <strong>correntes sinalização</strong> é apenas um dos muitos produtos que oferecemos na empresa, e logo abaixo vamos conversar mais sobre essas <strong>correntes sinalização</strong> que são tão importantes em diversas situações. </p>

                    <h2>MAS POR QUE AS CORRENTES SINALIZAÇÕES SÃO TÃO IMPORTANTES? ENTENDA O PORQUÊ. </h2>

                    <p>Hoje em dia se tornou como equipamento obrigatório as <strong>correntes sinalização</strong>, e podemos observar que, a segurança e a produtividade devem ser duas coisas que precisam andar lado a lado e ser prioridade em uma rotina empresarial. As <strong>correntes sinalização</strong> é apenas um dos equipamentos que fazem parte dos EPCs (Equipamentos de Proteção Coletiva) e que se tornaram fundamentais para manter a organização de ambientes além de trazer e facilitar a segurança e isolamento de lugares e ambientes que são propícios a um número maior de acidentes. O exemplo das empresas é somente um entre vários outros ambientes que necessitam das <strong>correntes sinalização</strong> e devemos estar sempre atentos a presença das mesmas em um local. </p>

                    <p>As <strong>correntes sinalização</strong> geralmente são fabricadas com plástico de polipropileno que oferece uma grande durabilidade, grande resistência e geralmente possuem dimensões variadas e que podem ser aplicadas em pedestais para segurá-las e facilitar o trânsito, seja ele de automóveis ou pessoas. A importância das <strong>correntes sinalização</strong> merece ser destacada porque podemos concordar que em algum momento sua empresa, ou qualquer outro ambiente de utilização de tal equipamento deverá ser demarcado por alguma situação ou até mesmo todos os dias, os shows é um grande exemplo que é necessária a utilização dessas correntes para demarcar alguns espaços para a transição de pessoas. </p>

                    <h3>CORRENTES SINALIZAÇÃO E SUAS GRANDES IMPORTâNCIAS: </h3>

                    <ul>
                        <li>Cores que permitem uma maior visibilidade; </li>
                        <li>Auxilia em filas de pessoas, como citado anteriormente; </li>
                        <li>Auxilia também na sinalização de ambientes que se encontram interditados; </li>
                        <li>Leva a possibilidade de realizar marcações temporárias; </li>
                    </ul>
                    <p>É importante ressaltar que, esses são somente alguns exemplos em que as correntes de sinalização se tornam eficientes. A Real Sinalização está disposta a tirar qualquer dúvida e entregar o melhor produto e atendimento, por este motivo não pense duas vezes em nos contatar ou até mesmo vir até nossa empresa! A Real Sinalização certamente é a melhor escolha quando se trata de sinalização viária.</p>

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