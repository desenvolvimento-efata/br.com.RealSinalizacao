<?php

    include "../efata/classe-efata.php";
    include "PHPMailerLocaweb/PHPMailerAutoload.php";
    include "PHPMailerLocaweb/class.phpmailer.php";
    include "../_variaveis.php";

    $assunto_padrao = "Orçamento via ".$nome_empresa;

    // Variável para Destinatário para testes
    // $email_contato = "";

    try {

        if(empty($nome_empresa)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>\$nome_empresa</strong> não foi definido.</p>");
        }
        if(empty($smtp_contato)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>\$smtp_contato</strong> não foi definido.</p>");
        }
        if(empty($email_remetente)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>\$email_remetente</strong> não foi definido.</p>");
        }
        if(empty($senha_remetente)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>\$senha_remetente</strong> não foi definido.</p>");
        }
        if(empty($email_contato)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>\$email_contato</strong> não foi definido.</p>");
        }

        $dados = filter_input(INPUT_POST, "data", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);

        $nome          = $dados["Contato"]["nome"];
        $telefone      = $dados["Contato"]["telefone"];
        $mensagem      = $dados["Contato"]["mensagem"];
        $emails_status = false;
        
        if(empty($nome)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>Nome</strong> é um campo obrigatório.</p>");
        }
        if(empty($telefone)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>Telefone</strong> é um campo obrigatório.</p>");
        }
        if(empty($mensagem)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>Mensagem</strong> é um campo obrigatório.</p>");
        }

        // Se o $captcha for true, faz a verificação
        if($captcha){
            if(empty($captcha_key_client_side)){
                throw new Exception("<h3>Ocorreu um Erro</h3><p>Chave do captcha lado cliente é obrigatória.</p>");
            }
            if(empty($captcha_key_server_side)){
                throw new Exception("<h3>Ocorreu um Erro</h3><p>Chave do captcha lado servidor é obrigatória.</p>");
            }
            $g_captcha = isset($_POST["g-recaptcha-response"]) ? $_POST["g-recaptcha-response"] : "";
            if(empty($g_captcha)){
                throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>g-recaptcha-response</strong> não foi encontrado.</p>");
            }
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $captcha_key_server_side . "&response=" . $captcha . "&remoteip=" . $_SERVER["REMOTE_ADDR"]);
            if($response.success == false){
                throw new Exception("<h3>Ocorreu um Erro</h3><p>O <strong>captcha</strong> não é válido.</p>");
            }
        }
        
        // Monta corpo da mensagem do email
        $conteudo  = "<h3>".$assunto_padrao."</h3>";
        $conteudo .= "<p><strong>Nome</strong>: " . $nome . "</p>";
        $conteudo .= "<p><strong>Telefone</strong>: " . $telefone . "</p>";
        $conteudo .= "<p><strong>Mensagem</strong>: " . $mensagem . "</p>";
        
        if($_SERVER["SERVER_NAME"] == "localhost") {
            throw new Exception("<p>Você está utilizando um servidor local para testes</p><hr>".$conteudo);
        }

        $mail = new PHPMailer;
        // $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Host = $smtp_contato;
        $mail->SMTPAuth = true;
        $mail->IsSMTP();
        $mail->isHTML(true);
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        $mail->Username = $email_remetente;
        $mail->Password = $senha_remetente;
        $mail->AddAddress($email_contato, $nome_empresa);

        // E-mails em cópia, adicionar uma nova linha para cada e-mail
        // $mail->AddAddress("email@efatamarketingdigital.com.br", "nome");
        
        $mail->From = $email_remetente;
        $mail->Sender = $email_remetente;
        $mail->FromName = $nome;
        $mail->Subject = $assunto_padrao;
        $mail->MsgHTML($conteudo);

        if(!$mail->Send()) {
            throw new Exception("Ocorreu um Erro: " . $mail->ErrorInfo);
        }
        
        echo json_encode(array(
            "status" => true,
            "message" => $conteudo
        ));
    } catch (Exception $e) {
        echo json_encode(array(
            "status" => false,
            "message" => $e->getMessage()
        ));
    }