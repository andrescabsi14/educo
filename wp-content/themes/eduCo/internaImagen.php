<?php
/*
Template Name: Interna Imagen
*/

?>

<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
<section class="main-container innerimage">
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
	</section>
</section>
<?php get_footer(); ?>