<?php
/*
Template Name: Virtual
*/

?>
<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
<section class="main-container virtuales">
	<section class="main-image <?php the_field( "texto" ); ?>">
		<figure style="background: url('<?php the_field( "imagen_principal" ); ?>') no-repeat center center; background-size: cover;">
			<div class="wrapcont darken">
				<h1><?php the_title(); ?></h1>
				<h4><?php the_field( "subtitulo" ); ?></h4>
			</div>
		</figure>
	</section>

	<section class="main-content wrapcont content">
		<h2><?php the_field("titulo_principal") ?></h2>
		<div class="summary">
			
			<figure>
				<?php the_post_thumbnail('medium'); ?>
			</figure>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
		<section class="levels-container">
			<h2 class="line">Niveles de Formación</h2>
			<div class="levels">
				
				<?php
					$args = array(
						'post_type' => 'niveles-virtual'
					);
					$query = new WP_Query( $args );
				 ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<article class="item">
						<figure style="background: url('<?php the_field( "imagen" ); ?>') no-repeat center center; background-size: cover;"></figure>
						<div class="text"><?php the_field( "descripcion" ); ?></div>
						<a href="<?php the_field( "link" ); ?>" class="btn">Ver más</a>
					</article>
				<?php endwhile; ?>
				<?php else: ?>
					<p>No se encontraron niveles de formación.</p>
				<?php endif; ?>
				<?php rewind_posts(); ?><?php wp_reset_query(); ?>


				<article class="clientsSliderContainer">
					<div id="sliderClientsInner" class="owl-carousel owl-theme sliderClients">
						<?php
							$args = array(
								'post_type' => 'slider_pie_pagina'
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


			</div>
		</section>

		<section id="price" class="price">
			<h2 class="line">Precios y descuentos</h2>
			<h6 class="subtitle"><strong>Por favor haga clic sobre el precio para comprar el curso</strong></h6>

			<div class="table">
				<div class="label"><a href="/contactenos/"><strong>Descuento por varios estudiantes</strong></a></div>
				<!-- Tabla Precios Presenciales -->
				<!-- ////////////////////////////////////////////////////// -->
				<div id="tablePresencial" class="tableWrapper virtual">



					<section class="table-container">

						<div class="label-container">
							<div class="individual">Precios por cada curso individual</div>
							<div class="groups">Precios con descuento por varios cursos</div>
						</div>
						<div class="label-side">
							<div class="macros">Financiero</div>
							<div class="macros">Macros</div>
							<div class="avanzado">Avanzado</div>
							<div class="itermedio">Intermedio</div>
							<div class="basico">Básico</div>
						</div>
						<?php
							$args = array(
								'post_type' => 'preciovirtuales'
							);
							$query = new WP_Query( $args );
						 ?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

							<div class="item <?php echo implode(' ', get_field('nivel_curso')); ?>">
								<div class="title">
									<div class="alternativa">Alternativa </div>
									<div class="curso"><?php the_field( "curso" ); ?></div>
									<div class="horas"><?php the_field( "horas" ); ?> horas</div>
									<div class="videos"><?php the_field( "numero_videos" ); ?> videos</div>
								</div>

								<?php 
									$level = implode(' ', get_field('nivel_curso'));
									if ($level == 'basico') {
								?>
									<div class="basico"><div class="botonPagos"><?php the_field( "boton_pagos" ); ?></div>  <span class="price"><?php the_field( "precio_curso" ); ?></span></div>
									<div class="intermedio"></div>
									<div class="avanzado"></div>
									<div class="macros"></div>
									<div class="financiero"></div>
								<?php } elseif ($level == 'intermedio') { ?>
									<div class="basico"></div>
									<div class="intermedio"><div class="botonPagos"><?php the_field( "boton_pagos" ); ?></div>  <span class="price"><?php the_field( "precio_curso" ); ?></span></div>
									<div class="avanzado"></div>
									<div class="macros"></div>
									<div class="financiero"></div>
								<?php } elseif ($level == 'avanzado') { ?>
									<div class="basico"></div>
									<div class="intermedio"></div>
									<div class="avanzado"><div class="botonPagos"><?php the_field( "boton_pagos" ); ?></div>  <span class="price"><?php the_field( "precio_curso" ); ?></span></div>
									<div class="macros"></div>
									<div class="financiero"></div>
								<?php } elseif ($level == 'macros') { ?>
									<div class="basico"></div>
									<div class="intermedio"></div>
									<div class="avanzado"></div>
									<div class="macros"><div class="botonPagos"><?php the_field( "boton_pagos" ); ?></div>  <span class="price"><?php the_field( "precio_curso" ); ?></span></div>
									<div class="financiero"></div>
								<?php } elseif ($level == 'financiero') { ?>
									<div class="basico"></div>
									<div class="intermedio"></div>
									<div class="avanzado"></div>
									<div class="macros"></div>
									<div class="financiero"><div class="botonPagos"><?php the_field( "boton_pagos" ); ?></div>  <span class="price"><?php the_field( "precio_curso" ); ?></span></div>
								<?php } elseif ($level == 'basico intermedio') { ?>
									<div class="basico"><div class="botonPagos"><?php the_field( "boton_pagos" ); ?></div>  <span class="price"><?php the_field( "precio_curso" ); ?></span></div>
									<div class="intermedio"></div>
									<div class="avanzado"></div>
									<div class="macros"></div>
									<div class="financiero"></div>
								<?php } elseif ($level == 'basico intermedio avanzado') { ?>
									<div class="basico"><div class="botonPagos"><?php the_field( "boton_pagos" ); ?></div>  <span class="price"><?php the_field( "precio_curso" ); ?></span></div>
									<div class="intermedio"></div>
									<div class="avanzado"></div>
									<div class="macros"></div>
									<div class="financiero"></div>
								<?php } elseif ($level == 'basico intermedio avanzado macros') { ?>
									<div class="basico"><div class="botonPagos"><?php the_field( "boton_pagos" ); ?></div>  <span class="price"><?php the_field( "precio_curso" ); ?></span></div>
									<div class="intermedio"></div>
									<div class="avanzado"></div>
									<div class="macros"></div>
									<div class="financiero"></div>
								<?php } else{ ?>

								<?php } ?> 

							</div>
						<?php endwhile; ?>
						<?php else: ?>
							<p>No se encontraron precios.</p>
						<?php endif; ?>
						<?php rewind_posts(); ?><?php wp_reset_query(); ?>
					</section>
				</div>
				<!-- End Tabla Precios Presenciales -->
				<!-- ////////////////////////////////////////////////////// -->
			</div>
		</section>

	</section>
</section>
<?php get_footer(); ?>