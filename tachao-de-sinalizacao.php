<?php

    include "php/efata/classe-efata.php"; 
    include "php/_variaveis.php";

    $title       = "Tachão de Sinalização";
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

                    <p>Um bom condutor deve sim, ter um total conhecimento de leis e regras do trânsito, bem como os equipamentos e símbolos utilizados para se comunicar com os motoristas e pilotos, para que esse conhecimento seja passado para todos os condutores, antes de se tirar a cnh deve-se passar por um curso que preparará o motorista para qualquer situação no trânsito e entendimento sobre os equipamentos como o <strong>tachão de sinalização</strong>, o cone de borracha, a lombada de borracha, a tacha refletiva e entre outros que são constantemente usados para sinalizar qualquer situação ou local. </p>

                    <h2>SAIBA MAIS SOBRE O TACHÃO DE SINALIZAÇÃO. </h2>

                    <p>Chamado também de tartaruga, o <strong>tachão de sinalização</strong> é uma peça fundamental para orientar e sistematizar o trânsito, haja vista que ele ajuda a demarcar determinados espaços, é importante que o <strong>tachão de sinalização</strong> siga aos padrões e normas estabelecidas de fabricação para que assim passe uma segurança maior ao ambiente e local que for instalado, vale a pena lembrar também que, o <strong>tachão de sinalização</strong> não pode ser instalado em pavimentos com a intenção de redução de velocidade de veículos e muito menos em ondulações transversais, tal regra foi imposta pelo Conselho Regional De trânsito - CONTRAN. Para que você tenha o <strong>tachão de sinalização</strong> muito bem instalado e de qualidade procure uma empresa especializada no assunto e que garanta um ótimo desempenho de seus produtos, como a real sinalização. </p>

                    <p>Nosso <strong>tachão de sinalização</strong> é fabricado com matérias-primas que proporcionam uma alta durabilidade e resistência, pois, devemos lembrar que o <strong>tachão de sinalização</strong> ficará geralmente exposto a reações adversas como chuvas, granizos, e sol excessivo, além de que o <strong>tachão de sinalização</strong> precisa ter a resistência de suportar grandes pesos de veículos, como os caminhões. O <strong>tachão de sinalização</strong> pode ter algumas diversidades na fabricação como por exemplo: eles podem ser monodirecionais, que sinalizam somente um lado com apenas um refletivo, podem ser bidirecional que sinaliza os dois lados da pista com dois refletivos instalados no próprio tachão ou pode ser cego.</p>

                    <h3>REAL SINALIZAÇÃO, A MELHOR EMPRESA DE SINALIZAÇÃO VIÁRIA DO MERCADO! </h3>

                    <p>Nos tornamos uma grande referência no segmento de sinalização viária devido aos equipamentos que são fabricados com grande excelência e maestria, além de que cumprimos com todos os prazos estabelecidos para os nossos clientes e parceiros, temos uma grande equipe que trabalha diariamente com o principal objetivo de atender a todas as necessidades de nossos clientes. </p>


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