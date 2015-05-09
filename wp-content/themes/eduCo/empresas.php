<?php
/*
Template Name: Empresas
*/

?>

<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
<section class="main-container empresas">
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
		<section class="benefits">
			<h2>Otros aspectos a tener en cuenta en un programa de Capacitación Empresarial.</h2>

			<?php
				$args = array(
					'post_type' => 'empresarial'
				);
				$query = new WP_Query( $args );
				$counter = 0;
			 ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $counter++; ?>
				<?php  if ( $counter % 2 == 0 ) { ?> 
					<article class="item even">
						<div class="container">
							<h4><?php the_title() ?></h4>
							<div class="content">
								<?php the_field("descripcion") ?>
							</div>
						</div>
						<figure style="background: url('<?php the_field( "imagen" ); ?>') no-repeat center center; background-size: cover;"></figure>
					</article>
				<?php } else { ?>
				<article class="item odd">
					<figure style="background: url('<?php the_field( "imagen" ); ?>') no-repeat center center; background-size: cover;"></figure>
					<div class="container">
						<h4><?php the_title() ?></h4>
						<div class="content">
							<?php the_field("descripcion") ?>
						</div>
					</div>
				</article>
				<?php } ?>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php rewind_posts(); ?><?php wp_reset_query(); ?>
		</section>
		<section class="cta">
			<h2>Solicite una llamada a nuestros ejecutivos de cuenta</h2>
			<div class="testimonial">
				<h3>Testimonios de nuestros clientes</h3>
					<?php
						$args = array(
							'post_type' => 'testimonios'
						);
						$query = new WP_Query( $args );
					 ?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="item">
							<h5><strong><?php the_title(); ?></strong></h5>
							<h6><?php the_field( "empresa" ); ?></h6>
							<div class="content">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endwhile; ?>
					<?php else: ?>
						<p>No se encontraron testimonios.</p>
					<?php endif; ?>
					<?php rewind_posts(); ?><?php wp_reset_query(); ?>

			</div>
			<?php if ( is_active_sidebar( 'formulario-empresas' ) ) : ?>
				<?php dynamic_sidebar( 'formulario-empresas' ); ?>
			<?php endif; ?>
		</section>
	</section>
</section>
<?php get_footer(); ?>