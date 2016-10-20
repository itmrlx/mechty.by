<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-160.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/favicon-57.png">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<?php wp_head(); ?>
	<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39061425 = new Ya.Metrika({ id:39061425, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39061425" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
<body>

	<div class="container all-container <?php if(!is_home()){echo 'no-main';}; ?>">
		<!-- header -->
		<header class="row header-top">
			<div class="col-xs-3 socials-container">
				<?php if(get_field('vk','option')): ?><a href="<?php the_field('vk','option'); ?>" target="_blank" class="vk"></a><?php endif; ?>
				<?php if(get_field('gp','option')): ?><a href="<?php the_field('gp','option'); ?>" target="_blank" class="gp"></a><?php endif; ?>
				<?php if(get_field('fb','option')): ?><a href="<?php the_field('fb','option'); ?>" target="_blank" class="fb"></a><?php endif; ?>
			</div>
			<div class="col-xs-6 logo-container">
				<a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Праздничное агентство Мечты сбываются" /></a>
			</div>
			<div class="col-xs-3 contacts-container">
				<?php if(get_field('h_tel','option')): ?><p class="tel"><?php the_field('h_tel','option'); ?></p><?php endif; ?>
				<a href="#fform" class="btn btn-primary fancybox" onclick="fform('Получить звонок')">Получить звонок</a>
			</div>
		</header>
		<!-- navigation -->
		<nav class="row navigation-top">
			<div class="col-xs-12">
				<div class="burger-menu">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<?php 
					$args = array(
						'theme_location'  => 'main-menu',
						'container'       => '', 
						'menu_class'      => 'pro-menu', 
						);
					wp_nav_menu( $args );
				?>
			</div>
		</nav>
		<!-- other -->
		<div class="other-container">