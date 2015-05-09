<!-- ///////////////////////////////////////////////////////////////
CONTENIDO
/////////////////////////////////////////////////////////////// -->
<?php get_header(); ?>
<section class="main-container nosotros">
	<section class="container_nosotros">
		<div class="wrapcont">
			<h1 class="title line"><?php the_title(); ?></h1>
			<section class="about">
				<section class="container_slider_nosotros">
					<div id="sliderNosotros" class="owl-carousel owl-theme">
						<?php
							$args = array(
								'post_type' => 'slide-nosotros'
							);
							$query = new WP_Query( $args );
						 ?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							<article class="item">
								<div class="img" style="background: url('<?php the_field( "imagen" ); ?>') no-repeat center center; background-size: cover;"></div>
								<span class="image_description"><?php the_title(); ?></span>
							</article>
						<?php endwhile; ?>
						<?php else: ?>
							<p>No se encontraron slides.</p>
						<?php endif; ?>
						<?php rewind_posts(); ?><?php wp_reset_query(); ?>
					</div>
				</section>
				<section class="content">
					<?php the_content(); ?>
					<!-- <h3>Somos</h3>
					<p>Somos un Centro Educativo con sede administrativa en Bogotá, constituido el 6 de junio de 1998 con la razón social CompuLearning S.A.S.</p>
					<h3>Nos dirigimos a</h3>
					<p>Profesionales Administrativos NO programadores, los cuales usan Excel ya sea para el manejo de información proveniente de programas administrativos o para el diseño de sus propios modelos formulados.</p>
					<h3>Enseñamos</h3>
					<p>A optimizar modelos de Excel y a beneficiarse de la versatilidad de Access para consultar información y para relacionarla en sus propios "Sistemas de información".</p>
					<h3>Cómo entendemos su necesidad</h3>
					<p>Sabemos que le interesa aprender Excel, Access, SQL y Visual Basic para reducir el tiempo en su actividad laboral, mas no para volverse un experto programador. Sin embargo, debe saber que las técnicas que en nuestros cursos aprende, forman las bases importantes para incursionar en esa actividad.</p> -->
				</section>
			</section>
		</div>
	</section>
</section>
<?php get_footer(); ?>