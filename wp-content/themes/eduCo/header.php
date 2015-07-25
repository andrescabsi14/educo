<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="description" content="<?php $yoast_meta = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true); if ($yoast_meta) {echo $yoast_meta;}?>">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.transitions.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-57852901-4', 'auto');
	  ga('send', 'pageview');

	</script>

	<!-- Google Code para etiquetas de remarketing -->
	<script type="text/javascript">
	var google_tag_params = {
	edu_pid: 'REPLACE_WITH_VALUE',
	edu_plocid: 'REPLACE_WITH_VALUE',
	edu_pagetype: 'REPLACE_WITH_VALUE',
	edu_totalvalue: 'REPLACE_WITH_VALUE',
	};
	</script>
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 979861554;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/979861554/?value=0&amp;guid=ON&amp;script=0" />
	</div>
	</noscript>
	<!-- Google Code para etiquetas de remarketing -->

</head>
<body <?php body_class( $class ); ?>>
	<div id="fb-root"></div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<header id="home">
		<section class="header-top">			
			<?php wp_nav_menu( array( 'theme_location' => 'redes-sociales' ) ); ?>
		</section>
		
		<section class="container-logo">
			<figure class="logo">
				<a href="/">
					<img src="<?php bloginfo('template_url'); ?>/img/logoHeader.png" alt="Compulearning">
				</a>
			</figure>
		</section>
		
		<nav id="main-menu" class="main-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
		</nav>
	</header>	