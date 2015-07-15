<?php get_header(); ?>
<section class="main-container">
	<section id="slider-container" class="slider-container">
		<div id="sliderHome" class="owl-carousel owl-theme">
			<?php
				$args = array(
					'post_type' => 'slide-home',
					'posts_per_page' => -1
				);
				$query = new WP_Query( $args );
			 ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="item" style="background: url('<?php the_field( "imagen" ); ?>') no-repeat center center; background-size: cover;">
					<div class="wrapcont content">
						<h2 class="title light"><?php the_title(); ?></h2>
						<p class="description dark"><?php the_field( "subtitulo" ); ?></p>
						<a class="btn" href="<?php the_field( "link" ); ?>"><?php the_field( "llamado_a_la_accion" ); ?></a>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else: ?>
				<p>No se encontraron slides.</p>
			<?php endif; ?>
			<?php rewind_posts(); ?><?php wp_reset_query(); ?>
		</div>
	</section>

	<section class="modalidad">
		<div class="wrapcont">
			<h2>Modalidades de Aprendizaje</h2>
			<?php
				$args = array(
					'post_type' => 'modalidades-aprendiz',
					'posts_per_page' => -1
				);
				$query = new WP_Query( $args );
			 ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<article class="item">
					<figure>
						<img src="<?php the_field( "imagen" ); ?>" alt="modalidad aprendizaje">
						<a class="btn" href="<?php the_field( "link" ); ?>"><?php the_field( "llamado_a_la_accion" ); ?></a>
					</figure>
					<h4><?php the_title(); ?></h4>
					<div class="description">
						<?php the_field( "descripcion" ); ?>
					</div>
				</article>
			<?php endwhile; ?>
			<?php else: ?>
				<p>No se encontraron modalidades de estudio.</p>
			<?php endif; ?>
			<?php rewind_posts(); ?><?php wp_reset_query(); ?>
		</div>
	</section>
	<section class="testimonials darken secondary">
		<div class="wrapcont">
			<h2>Casos de Éxito</h2>
			<div id="sliderTestimonials" class="owl-carousel owl-theme sliderTestimonials">
				<?php
					$args = array(
						'post_type' => 'casos-exito',
						'posts_per_page' => -1
					);
					$query = new WP_Query( $args );
				 ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


					<article class="item">
						<section class="content">
							<h5><strong><?php the_field( "cargo_profesion" ); ?></strong></h5>
							<h6 class="profile">
								<strong> <i><?php the_field( "frase_resaltar" ); ?></i><span>- <?php the_field( "nombre" ); ?></span></strong>
							</h6>
							<div class="testimonial">
								<?php the_field( "caso_exito" ); ?>
							</div>
						</section>
						<figure class="image">
							<div class="img" style="background: url('<?php the_field( "imagen" ); ?>') no-repeat center center; background-size: cover;"></div>
						</figure>
					</article>
				<?php endwhile; ?>
				<?php else: ?>
					<p>No se encontraron modalidades de estudio.</p>
				<?php endif; ?>
				<?php rewind_posts(); ?><?php wp_reset_query(); ?>
			</div>
		</div>
	</section>
</section><!-- end main-container -->


<section id="scrollTop" class="scrollTop">
	<a href="#home" class="scroll">
		<span class="icon ac-chevron-up-1">
	</a>
</section>

<?php get_footer(); ?>


