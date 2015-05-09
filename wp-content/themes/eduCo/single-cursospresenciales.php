<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
<section class="main-container cursos">
	<section class="main-image ">
		<figure style="background: url('<?php the_field( "imagen_principal" ); ?>') no-repeat center center; background-size: cover;">
			<div class="wrapcont darken">
				<h1>CURSOS PRESENCIALES</h1>
			</div>
		</figure>
	</section>
	<section class="main-content wrapcont content">
		<section class="title">
			<a class="descarga_temario" href="<?php the_field( "descarga_temario" ); ?>"></a>
			<h1><?php the_title(); ?></h1>
			<h2 class="darken"><?php the_field( "subtitulo" ); ?></h2>
		</section>
		<section class="courseContent">
			<div class="video">
				<iframe width="100%" height="275" frameborder="0" src="http://www.youtube.com/embed/<?php the_field( "video" ); ?>?rel=0;3&amp;autohide=1&amp;showinfo=0" allowfullscreen></iframe>
			</div>
			<div class="tabs">

				<div id="tabs" class="owl-carousel owl-theme">
				 
					<div class="item primero">

						<span class="label">Inversión:</span>
						<section class="left">
							<div class="precio"><?php the_field( "precio" ); ?></div>
							<div class="precioAntes"> Antes: <?php the_field( "precio_antes" ); ?></div>
							<div class="comprar"><?php the_field( "boton_compra" ); ?></div>
						</section>
						<section class="right">
							<div class="incluye">
								<div class="title">Incluye...</div>
								<div class="text"><?php the_field( "incluye" ); ?></div>
							</div>
						</section>

					</div>
					<div class="item segundo">
						<section class="text">
							<?php the_field( "dirigido_a" ); ?>
						</section>
						<section class="image" style="background: url('<?php the_field( "imagen_dirigido_a" ); ?>') no-repeat center center; background-size: cover;"></section>
					</div>
					<div class="item tercero">
						<section class="text">
							<?php the_field( "alcance" ); ?>
						</section>
						<section class="image" style="background: url('<?php the_field( "imagen_alcance" ); ?>') no-repeat center center; background-size: cover;">
						</section>
					</div>
					<div class="item cuarto">
						<section class="text">
							<?php the_field( "objetivos" ); ?>
						</section>
					</div>
				 
				</div>

			</div>	
		</section>
		<section class="share">
			<div class="social">
				<div class="fb-like" data-href="https://www.compulearning.edu.co" data-layout="button_count" data-action="recommend" data-show-faces="true" data-share="false"></div>
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="CompuLearning1" data-related="CompuLearning1" data-hashtags="compulearning">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
			<a class="sale" href="/cursos-presenciales/#price"></a>
			
		</section>
		<section class="lessons">
			<h2 class="line green">Temario por Lecciones</h2>
			<?php the_field( "lecciones" ); ?>
			<hr>
		</section>
	</section>
</section>
<?php get_footer(); ?>