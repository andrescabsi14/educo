	<footer class="center">
		<?php 
		if ( is_page_template( 'page-virtual.php' ) || is_page_template( 'interna.php' ) ) { ?> 
			
		<?php } elseif ( is_page_template( 'page-presencial.php' ) ) { ?>
			<section class="dates">
				<div class="wrapcont">
					<?php
						$args = array(
							'post_type' => 'contenidos',
							'name' => 'footer-horarios'
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<h2 class="line"><strong>Horarios <?php echo date('Y'); ?></strong></h2>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>
					<?php rewind_posts(); ?><?php wp_reset_query(); ?>
				</div>
			</section>
		<?php } else { ?>
			<section class="top-footer">
				<div class="wrapcont">
					<article class="about-us">
						<div class="about">
							<h3>SOBRE NOSOTROS</h3>
							<p>Somos un Centro Educativo con sede administrativa en Bogotá, constituido el 6 de junio de 1998 con la razón social CompuLearning S.A.S. Nos dirigimos a Profesionales Administrativos NO programadores, los cuales usan Excel ya sea para...   Ver más</p>
						</div>
						<?php wp_nav_menu( array( 'theme_location' => 'redes-sociales' ) ); ?>
					</article>
					<article class="clientsSliderContainer">
						<h3>NUESTROS CLIENTES</h3>
						<div id="sliderClients" class="owl-carousel owl-theme sliderClients">					

							<?php
								$args = array(
									'post_type' => 'slider_pie_pagina',
									'posts_per_page' => -1
								);
								$query = new WP_Query( $args );
							 ?>
							<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
								<div class="item">
									<div class="img" style="background: white url('<?php the_field( "imagen" ); ?>') no-repeat center center; background-size: 150px;"></div>
								</div>
							<?php endwhile; ?>
							<?php else: ?>
								<p>No se encontraron casos de éxito.</p>
							<?php endif; ?>
							<?php rewind_posts(); ?><?php wp_reset_query(); ?>

						</div>
						<p>Estas son algunas de las compañías que han confiado en nuestro profesionalismo.</p>
					</article>
					<article class="contact">
						<h3>CONTÁCTENOS</h3>
						<p>
							<strong>Correo Electrónico:</strong>
							info@compulearning.edu.co
						</p>
						<p>
							<strong>Teléfonos:</strong>
							+571 621 9327 <br>
							+571 621 9303 <br>
							+571 621 8317 <br>
							<br>
							<strong>Móvil:</strong>
							+57 312 431 3742
						</p>
					</article>
					<article class="newsletter">
						<h3>SUSCRÍBASE A NUESTRO BOLETÍN</h3>
						<p>Y reciba noticias e información relevante acerca de nuestros cursos y promociones.</p>
						<?php if ( is_active_sidebar( 'newsletter' ) ) : ?>
							<?php dynamic_sidebar( 'newsletter' ); ?>
						<?php endif; ?>
					</article>
				</div>
			</section>
		<?php } ?> <!-- End main Conditional -->

		<section class="bottom-footer darken">
			<div class="wrapcont">
				<article class="sitemap">
					<?php wp_nav_menu( array( 'theme_location' => 'pie-pagina' ) ); ?>
					<div class="contact">
						<strong>Teléfonos:</strong> +571 6219327  /  6219303  /  6218317 Móvil: +57 312 431 3742 <br>
						<strong>Dirección:</strong> Carrera 18 N° 78 - 40 Of. 403 - Bogotá - Colombia
					</div>
				</article>
				<article class="copyright">
					<?php bloginfo( 'name' ); ?>® <?php echo date('Y'); ?>   |  Todos los derechos reservados <br>
					<a target="_blank" href="http://www.innov.com.co"><strong>Desarrollado por INNOV</strong></a>
				</article>
			</div>
		</section>
	</footer>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
	<!-- Facebook Conversion Code for Edu.co - Suscripción -->
	<script>(function() {
	  var _fbq = window._fbq || (window._fbq = []);
	  if (!_fbq.loaded) {
	    var fbds = document.createElement('script');
	    fbds.async = true;
	    fbds.src = '//connect.facebook.net/en_US/fbds.js';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(fbds, s);
	    _fbq.loaded = true;
	  }
	})();
	window._fbq = window._fbq || [];
	window._fbq.push(['track', '6022861761826', {'value':'0.00','currency':'COP'}]);
	</script>
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6022861761826&amp;cd[value]=0.00&amp;cd[currency]=COP&amp;noscript=1" /></noscript>

	<!-- Google Code for Presencial Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 979861554;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "jhK7CK_Cs1kQsoCe0wM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/979861554/?label=jhK7CK_Cs1kQsoCe0wM&amp;guid=ON&amp;script=0" />
	</div>
	</noscript>
</body>
</html>