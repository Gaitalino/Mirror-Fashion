<!DOCTYPE html>
	<html>
		<head>
			<title><?php print $title; ?></title>
			<meta chatset="utf-8">
			<meta name="viewport" content="width=device-width">
			<link rel="stylesheet" href="css/reset.css">
			<link rel="stylesheet" href="css/index.css">
			<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
			<?php print @$cabecalho_css; ?>
		</head>
		<body>
				<header class="container">
				<!--[if	lt	IE	9]>
				<script	src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
				<h1><a href="index.html"><img src="img/logo.png" alt="Mirror Fashion"></a></h1>
				
				<p class="sacola">Nenhum item na sacola de compras</p>
				
				<nav class="menu-opcoes">
					<ul>
						<li><a href="#">Sua Conta</a></li>
						<li><a href="#">Lista de Desejos</a></li>
						<li><a href="#">Cartão Fidelidade</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="#">Ajuda</a></li>
					</ul>
				</nav>
			</header>