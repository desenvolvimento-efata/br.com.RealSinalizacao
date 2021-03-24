$(function(){

    /*! Botão de sobe para o topo */
    $(".mm-up-to-top").click(function(){$("html, body").animate({scrollTop: 0}, 600);});

    /*! Menu Responsivo */
    var basehref = $("head base").attr("href");
    var nomeempre = $("head meta[name=author]").attr("content");
    var bslick = "<a href=\""+basehref+"\">"+nomeempre+"</a>";
    $(".menu-list").slicknav({brand: bslick, label: "MENU", prependTo: "header", removeClasses: true});

    /*! Mensagens de Formulário */
    var a = function(a){return 11 === a.replace(/\D/g, "").length ? "(00) 00000-0000" : "(00) 0000-00009";}, b = {onKeyPress: function(b, c, d, e){d.mask(a.apply({}, arguments), e);},placeholder: "(__) ____-____"};
    $(".mask-phone").mask(a, b), $.extend($.validator.messages, {
        required: "Este campo é obrigatório.",
        email: "Por favor, insira um endereço de email válido.",
        minlength: "Por favor, digite pelo menos {0} caracteres."
    });

    /*! Active da Barra Lateral */
    $('.sidebar ul li a[href="'+window.location+'"]').addClass("active-link-sidebar");

    /*! Formulário Contato */
    $(".form-contato").validate({
        errorClass: "control-label",
        validClass: "control-label",
        rules: {
            "data[Contato][nome]" : {
                required: true
            },
            "data[Contato][email]" : {
                required: true,
                email: true
            },
            "data[Contato][telefone]" : {
                required: true
            },
            "data[Contato][como_chegou]" : {
                required: true
            }
        },
        highlight: function (element){
            $(element).parents("div.form-group").addClass("has-error").removeClass("has-success");
        }, 
        unhighlight: function (element){ 
            $(element).parents("div.form-group").removeClass("has-error").addClass("has-success"); 
        },
        submitHandler: function(form, e){
            $.ajax({
                type: "POST",
                url: "php/email/dispara-email-contato.php",
                data: $(form).serialize(),
                dataType: "json",
                beforeSend: function(){
                    $(".btn-send").html("Aguarde...").attr("disabled", "disabled");
                    $(".form-control").prop("disabled", true);
                },
                success: function(data){
                    if(data.status){
                        window.location = "mensagem-enviada";
                    }else{
                        $("#modal-mensagem-fancybox").html(data.message);
                        $("#trigger-mensagem-fancybox").fancybox().trigger("click");
                    }
                },
                error: function(){
                    $("#modal-mensagem-fancybox").html("<h2>Ocorreu um Erro</h2><p>Por favor, tente novamente mais tarde.</p>");
                    $("#trigger-mensagem-fancybox").fancybox().trigger("click");
                },
                complete: function(){
                    $(".btn-send").html("Enviar").removeAttr("disabled");
                    $(".form-control").prop("disabled", false);
                }
            });
        }
    });

    /*! Formulário Palavra Chave */
    $(".form-contato-palavra-chave").validate({
        errorClass: "control-label",
        validClass: "control-label",
        rules: {
            "data[Contato][nome]" : {
                required: true
            },
            "data[Contato][telefone]" : {
                required: true
            },
            "data[Contato][mensagem]" : {
                required: true
            }
        },
        highlight: function (element){
            $(element).parents("div.form-group").addClass("has-error").removeClass("has-success");
        }, 
        unhighlight: function (element){ 
            $(element).parents("div.form-group").removeClass("has-error").addClass("has-success"); 
        },
        submitHandler: function(form, e){
            $.ajax({
                type: "POST",
                url: "php/email/dispara-email-palavra-chave.php",
                data: $(form).serialize(),
                dataType: "json",
                beforeSend: function(){
                    $(".btn-send").html("Aguarde...").attr("disabled", "disabled");
                    $(".form-control").prop("disabled", true);
                },
                success: function(data){
                    if(data.status){
                        window.location = "mensagem-enviada";
                    }else{
                        $("#modal-mensagem-fancybox").html(data.message);
                        $("#trigger-mensagem-fancybox").fancybox().trigger("click");
                    }
                },
                error: function(){
                    $("#modal-mensagem-fancybox").html("<h2>Ocorreu um Erro</h2><p>Por favor, tente novamente mais tarde.</p>");
                    $("#trigger-mensagem-fancybox").fancybox().trigger("click");
                },
                complete: function(){
                    $(".btn-send").html("Enviar").removeAttr("disabled");
                    $(".form-control").prop("disabled", false);
                }
            });
        }
    });

});