<?php  

	add_theme_support( 'post-thumbnails' );

	function mainMenu() {
	  register_nav_menu('menu-principal',__( 'menu-principal' ));
	}
	add_action( 'init', 'mainMenu' );

	function footerMenu() {
	  register_nav_menu('pie-pagina',__( 'pie-pagina' ));
	}
	add_action( 'init', 'footerMenu' );

	function socialMediaMenu() {
	  register_nav_menu('redes-sociales',__( 'redes-sociales' ));
	}
	add_action( 'init', 'socialMediaMenu' );



	/*Register our sidebars and widgetized areas.
	*****************************************************/
	function innov_widgets_init() {
		// register_sidebar(array(
		// 	'id' => 'pie-pagina',
		// 	'name' => 'Texto pie de pagina',
		// 	'before_widget' => '<div class="text">',
		// 	'after_widget' => '</div>',
		// 	'before_title' => '<h3>',
		// 	'after_title' => '</h3>',
		// ));
		// register_sidebar(array(
		// 	'id' => 'contactenos',
		// 	'name' => 'Contáctenos',
		// 	'before_widget' => '<div class="contactenos">',
		// 	'after_widget' => '</div>',
		// 	'before_title' => '<h4>',
		// 	'after_title' => '</h4>',
		// ));
		register_sidebar(array(
			'id' => 'formulario-contacto',
			'name' => 'Formulario Contácto',
			'before_widget' => ' ',
			'after_widget' => ' ',
			'before_title' => '<h4 class="hidden">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'id' => 'formulario-empresas',
			'name' => 'Formulario Empresas',
			'before_widget' => '<div class="contact">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="hidden">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'id' => 'newsletter',
			'name' => 'Newsletter',
			'before_widget' => '<div class="newsletter">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="hidden">',
			'after_title' => '</h4>',
		));
	}
	add_action ( 'widgets_init', 'innov_widgets_init' );

?>