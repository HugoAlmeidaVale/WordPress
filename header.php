<!DOCTYPE html>
<html>
<head>
	<title>Tema Personalizado</title>
	<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/style.css">
	<meta charset="utf-8">
</head>
<body>

<header>
	<div class="container">Otaku sem limites</div>
</header>

<?php $defaults = array(
	'menu'				=> 'primary',
	'container'			=> 'nav',
	'menu_class'		=> 'menu-principal',
	'fallback_cb'		=> 'wp_page_menu',
);
?>
 <nav class="menu">
 	<div class="container">
<?php wp_page_menu( $defaults ); ?>
	</div>
</nav>
<div class="container">


