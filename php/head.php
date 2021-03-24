<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="http://schema.org/WebPage">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $title; ?> - <?php echo $nome_empresa; ?></title>
		<base href="<?php echo $url; ?>">
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="keywords" content="<?php echo $title; ?>">
		<meta name="geo.position" content="<?php echo $unidades[1]["latitude_longitude"]; ?>">
		<meta name="geo.placename" content="<?php echo $unidades[1]["estado"]; ?>-<?php echo $unidades[1]["uf"]; ?>">
		<meta name="geo.region" content="SP-BR" >
		<meta name="ICBM" content="<?php echo $unidades[1]["latitude_longitude"]; ?>">
		<meta name="robots" content="index,follow">
		<meta name="rating" content="General">
		<meta name="revisit-after" content="7 days">
		<meta name="author" content="<?php echo $nome_empresa; ?>">
		<link rel="canonical" href="<?php echo $canonical; ?>">
		<link rel="shortcut icon" href="<?php echo $url; ?>imagens/favicon.png">
		<meta property="og:region" content="Brasil">
		<meta property="og:title" content="<?php echo $title; ?>">
		<meta property="og:type" content="article">
		<meta property="og:url" content="<?php echo $canonical; ?>">
		<meta property="og:description" content="<?php echo $description; ?>">
		<meta property="og:site_name" content="<?php echo $unidades[1]["nome"]; ?>">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:url" content="<?php echo $canonical; ?>">
		<meta name="twitter:title" content="<?php echo $title; ?>">
		<meta name="twitter:description" content="<?php echo $description; ?>">
		<!-- Template Main CSS File -->
		<link href="assets/css/style.css" rel="stylesheet">


<link rel="stylesheet" href="assets/fontawesome-free-5.7.0-web/css/all.min.css">
		<!-- Desenvolvido por Inovvary Marketing Digital, www.inovvary.com.br - Todos os direitos reservados, 2020 - <?php echo date("Y"); ?> -->
		
	    <?php if($captcha){ ?>
	    <script src="https://www.google.com/recaptcha/api.js"></script>
	    <?php } ?>