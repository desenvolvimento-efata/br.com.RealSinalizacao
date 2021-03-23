<?php

    // Parâmetros para URL
    $ef = new efata(array(
        // URL local
        "http://localhost/br.com.RealSinalizacao/",
        // URL online
        "http://www.realsinalizacao.com.br/"
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
    $smtp_contato            = "";
    $email_remetente         = "";
    $senha_remetente         = "";

    // Recaptcha Google
    $captcha                 = false; // https://www.google.com/recaptcha/
    $captcha_key_client_side = "";
    $captcha_key_server_side = "";
        
    // Palavras Chave
    $palavras_chave = array(
        "Palavra Chave",
        "Palavra Chave 2",
        "Palavra Chave 3",
        "Palavra Chave 4",
        "Palavra Chave 5"
    );