<?php

    // Parâmetros para URL
    $ef = new efata(array(
        // URL local
        "http://localhost/realsinalizacao.com.br/",
        // URL online
        "https://www.realsinalizacao.com.br/"
    ));

    // Principais Dados do Cliente
    $nome_empresa  = "Real Sinalização";
    $slogan        = "";
    $email_contato = "contato@realsinalizacao.com.br";

    // Parâmetros de Unidade
    $unidades = array(
        1 => array(
            "nome" => "Real Sinalização",
            "rua" => "Rua Orco, 143",
            "bairro" => "Jardim Adelfiore",
            "cidade" => "São Paulo",
            "estado" => "São Paulo",
            "uf" => "SP",
            "cep" => "05223-110",
            "latitude_longitude" => "-23.40882783565755, -46.73592847184738", // Consultar no maps.google.com
            "ddd" => "11",
            "telefone" => "3917-5139",
            "link_maps" => "https://www.google.com/maps/embed?pb=!4v1616463835335!6m8!1m7!1sJG7hPM0GagGVXh7XgXAPmg!2m2!1d-23.40880322119999!2d-46.7363361676049!3f138.76295!4f0!5f0.7820865974627469" // Incorporar link do maps.google.com
        ),
        2 => array(
            "nome" => "",
            "rua" => "",
            "bairro" => "",
            "cidade" => "",
            "estado" => "",
            "uf" => "",
            "cep" => "",
            "ddd" => "",
            "telefone" => ""
        )
    );
    
    // Variáveis 
    $url                     = $ef->url;
    $canonical               = $ef->canonical;
	
    // Parâmetros para Formulário de Contato
    $smtp_contato            = "gagarin1980.hospedagemdesites.ws";
    // $smtp_contato            = "200.234.222.116";
    // $smtp_contato            = "perithusengenharia.com.br";
    $email_remetente         = "contato@realsinalizacao.com.br";
    $senha_remetente         = "contato!@#realsinalizacao";


    // Recaptcha Google
    $captcha                 = false; // https://www.google.com/recaptcha/
    $captcha_key_client_side = "";
    $captcha_key_server_side = "";
        
    // Palavras Chave
    $palavras_chave = array(
        "Bate Rodas de Sinalização",
        "Cone Barril Cone de Pvc",
        "Cone de Sinalização de Borracha",
        "Cone de Sinalização Viária 75cm",
        "Cones de Sinalização em Sp",
        "Cones de Sinalização",
        "Conão de Sinalização",
        "Empresa de Lombada de Borracha",
        "Empresa de Sinalização Viária",
        "Fabricante de Lombada de Borracha",
        "Lombada de Borracha em Sp",
        "Lombada de Borracha para Condomínios",
        "Lombada de Borracha para Estacionamentos",
        "Lombadas de Sinalização",
        "Placa de Sinalização Viária",
        "Redutor de Velocidade Sinalização",
        "Segregador para Sinalização Viária",
        "Sinalização Horizontal",
        "Sinalização para Estacionamentos",
        "Sinalização Viária em Sp",
        "Sinalização Viária Horizontal",
        "Sinalização Viária",
        "Sinalizações Viárias",
        "Tacha de Sinalização",
        "Tachas Refletivas",
        "Tachinha para Sinalização",
        "Tachão Bidirecional Preço",
        "Tachão de Sinalização",
        "Tachão de Trânsito",
        "Tachão Redutor de Velocidade",
        "Tachão Refletivo Bidirecional",
        "Tachão Refletivo",
        "Tintas Demarcação Viária",
        "Correntes de Plástico",
        "Correntes Sinalização",
        "Pedestal para Correntes",
        "Pedestal de PVC",
        "Placas de Lombadas",
        "Placas de Velocidade",
        "Placas para Condomínios",
        "Fábrica de Placas",
        "Fábrica de Lombadas de Borracha",
        "Fábrica de Tachão",
        "Fábrica de Correntes",
        "Fábrica de Pedestal",
        "Tinta de Demarcação",
        "Tinta para Estacionamentos",
        "Pinturas de Vagas",
        "Pinturas PNE e Pinturas PCD",
        "Tinta de Sinalização"
    );