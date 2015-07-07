<?php
/*
Template Name: Horarios Cursos Presenciales
*/

?>

<?php get_header(); ?>
<?php if( have_posts() ) the_post(); ?>
<section class="main-container inner">
	<section class="main-image <?php the_field( "texto" ); ?>">
		<figure style="background: url('<?php the_field( "imagen_principal" ); ?>') no-repeat center center; background-size: cover;">
			<div class="wrapcont darken">
				<h1><?php the_title(); ?></h1>
				<h4><?php the_field( "subtitulo" ); ?></h4>
			</div>
		</figure>
	</section>

	<section class="main-content wrapcont content">
		<div class="content">
			<?php the_content(); ?>


		<div class="table" style="display: none;">


			<!-- HORARIO A
			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<h2>Horario A</h2>
			<strong><?php the_field( "horario_a_-_horas" ); ?></strong>

				<table style="height: 122px; border-color: #f5f5f5; font-size: 12px; background-color: #efefef;  margin-top: 20px;" border="1" width="100%" cellspacing="0">
				<tbody>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Básico</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Básico Hasta Intermedio</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Básico Hasta Avanzado</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Básico Hasta Macros</strong></span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;">   <span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">Inicia:</span>

					<?php if( have_rows('solo_basico') ): ?>
						<ul>
						<?php while( have_rows('solo_basico') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;"> </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span>
					<?php if( have_rows('solo_basico') ): ?>
						<ul>
						<?php while( have_rows('solo_basico') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</span></td>

				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_basico_hasta_intermedio') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_intermedio') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('de_basico_hasta_intermedio') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_intermedio') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_basico_hasta_avanzado') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_avanzado') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span> 
					<?php if( have_rows('de_basico_hasta_avanzado') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_avanzado') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_basico_hasta_macros') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_macros') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('de_basico_hasta_macros') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_macros') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Intermedio</strong> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> <strong>De Intermedio Hasta Avanzado</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Intermedio Hasta Macros</strong> </span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia: </span></span></span><span style="margin-bottom: 0; text-align: left;">
					<?php if( have_rows('solo_intermedio') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza: </span></span></span><span style="margin-bottom: 0; text-align: left;">
					<?php if( have_rows('solo_intermedio') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_intermedio_hasta_avanzado') ): ?>
						<ul>
						<?php while( have_rows('de_intermedio_hasta_avanzado') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('de_intermedio_hasta_avanzado') ): ?>
						<ul>
						<?php while( have_rows('de_intermedio_hasta_avanzado') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('solo_intermedio_hasta_macros') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio_hasta_macros') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;"> </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span>
					<?php if( have_rows('solo_intermedio_hasta_macros') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio_hasta_macros') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Avanzado</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Avanzado Hasta Macros</strong> </span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('solo_avanzado') ): ?>
						<ul>
						<?php while( have_rows('solo_avanzado') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('solo_avanzado') ): ?>
						<ul>
						<?php while( have_rows('solo_avanzado') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">  Inicia:</span>
					<?php if( have_rows('de_avanzado_hasta_macros') ): ?>
						<ul>
						<?php while( have_rows('de_avanzado_hasta_macros') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span> 
					<?php if( have_rows('de_avanzado_hasta_macros') ): ?>
						<ul>
						<?php while( have_rows('de_avanzado_hasta_macros') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Macros</strong> </span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;">   <span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">Inicia:</span>
					<?php if( have_rows('solo_macros') ): ?>
						<ul>
						<?php while( have_rows('solo_macros') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span> 
					<?php if( have_rows('solo_macros') ): ?>
						<ul>
						<?php while( have_rows('solo_macros') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				</tbody>
				</table>


			<!-- HORARIO B
			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<h2>Horario B</h2>
			<strong><?php the_field( "horario_a_-_horas_copy" ); ?></strong>

				<table style="height: 122px; border-color: #f5f5f5; font-size: 12px; background-color: #efefef;  margin-top: 20px;" border="1" width="100%" cellspacing="0">
				<tbody>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Básico</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Básico Hasta Intermedio</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Básico Hasta Avanzado</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Básico Hasta Macros</strong></span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;">   <span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">Inicia:</span>

					<?php if( have_rows('solo_basico_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_basico_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;"> </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span>
					<?php if( have_rows('solo_basico_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_basico_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</span></td>

				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_basico_hasta_intermedio_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_intermedio_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('de_basico_hasta_intermedio_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_intermedio_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_basico_hasta_avanzado_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_avanzado_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span> 
					<?php if( have_rows('de_basico_hasta_avanzado_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_avanzado_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_basico_hasta_macros_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_macros_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('de_basico_hasta_macros_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_macros_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Intermedio</strong> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> <strong>De Intermedio Hasta Avanzado</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Intermedio Hasta Macros</strong> </span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia: </span></span></span><span style="margin-bottom: 0; text-align: left;">
					<?php if( have_rows('solo_intermedio_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza: </span></span></span><span style="margin-bottom: 0; text-align: left;">
					<?php if( have_rows('solo_intermedio_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_intermedio_hasta_avanzado_copy') ): ?>
						<ul>
						<?php while( have_rows('de_intermedio_hasta_avanzado_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('de_intermedio_hasta_avanzado_copy') ): ?>
						<ul>
						<?php while( have_rows('de_intermedio_hasta_avanzado_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('solo_intermedio_hasta_macros_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio_hasta_macros_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;"> </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span>
					<?php if( have_rows('solo_intermedio_hasta_macros_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio_hasta_macros_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Avanzado</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Avanzado Hasta Macros</strong> </span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('solo_avanzado_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_avanzado_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('solo_avanzado_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_avanzado_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">  Inicia:</span>
					<?php if( have_rows('de_avanzado_hasta_macros_copy') ): ?>
						<ul>
						<?php while( have_rows('de_avanzado_hasta_macros_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span> 
					<?php if( have_rows('de_avanzado_hasta_macros_copy') ): ?>
						<ul>
						<?php while( have_rows('de_avanzado_hasta_macros_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Macros</strong> </span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;">   <span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">Inicia:</span>
					<?php if( have_rows('solo_macros_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_macros_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span> 
					<?php if( have_rows('solo_macros_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_macros_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				</tbody>
				</table>

			<!-- HORARIO C
			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<h2>Horario C</h2>
			<strong><?php the_field( "horario_a_-_horas_copy_copy" ); ?></strong>

				<table style="height: 122px; border-color: #f5f5f5; font-size: 12px; background-color: #efefef;  margin-top: 20px;" border="1" width="100%" cellspacing="0">
				<tbody>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Básico</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Básico Hasta Intermedio</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Básico Hasta Avanzado</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Básico Hasta Macros</strong></span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;">   <span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">Inicia:</span>

					<?php if( have_rows('solo_basico_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_basico_copy_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;"> </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span>
					<?php if( have_rows('solo_basico_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_basico_copy_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</span></td>

				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_basico_hasta_intermedio_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_intermedio_copy_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('de_basico_hasta_intermedio_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_intermedio_copy_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_basico_hasta_avanzado_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_avanzado_copy_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span> 
					<?php if( have_rows('de_basico_hasta_avanzado_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_avanzado_copy_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_basico_hasta_macros_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_macros_copy_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('de_basico_hasta_macros_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('de_basico_hasta_macros_copy_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Intermedio</strong> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> <strong>De Intermedio Hasta Avanzado</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Intermedio Hasta Macros</strong> </span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia: </span></span></span><span style="margin-bottom: 0; text-align: left;">
					<?php if( have_rows('solo_intermedio_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio_copy_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza: </span></span></span><span style="margin-bottom: 0; text-align: left;">
					<?php if( have_rows('solo_intermedio_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio_copy_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('de_intermedio_hasta_avanzado_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('de_intermedio_hasta_avanzado_copy_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('de_intermedio_hasta_avanzado_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('de_intermedio_hasta_avanzado_copy_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('solo_intermedio_hasta_macros_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio_hasta_macros_copy_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;"> </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span>
					<?php if( have_rows('solo_intermedio_hasta_macros_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_intermedio_hasta_macros_copy_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Avanzado</strong></span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>De Avanzado Hasta Macros</strong> </span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">   Inicia:</span>
					<?php if( have_rows('solo_avanzado_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_avanzado_copy_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span>
				<span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">   Finaliza:</span>
					<?php if( have_rows('solo_avanzado_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_avanzado_copy_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				<td style="height: 70px; text-align: left;"><span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">  Inicia:</span>
					<?php if( have_rows('de_avanzado_hasta_macros_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('de_avanzado_hasta_macros_copy_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span> 
					<?php if( have_rows('de_avanzado_hasta_macros_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('de_avanzado_hasta_macros_copy_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				<tr>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"> </span></td>
				<td style="height: 30px; text-align: center;"><span style="color: #003b5d;"><strong>Solo Macros</strong> </span></td>
				</tr>
				<tr>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;"></td>
				<td style="height: 70px; text-align: left;">   <span style="margin-bottom: 0; text-align: left;"><span style="color: #008000;">Inicia:</span>
					<?php if( have_rows('solo_macros_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_macros_copy_copy') ): the_row();?>
							<?php the_sub_field('inicia'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">  </span></span><span style="margin-bottom: 0; text-align: left;"><span style="color: #ff0000;">Finaliza:</span> 
					<?php if( have_rows('solo_macros_copy_copy') ): ?>
						<ul>
						<?php while( have_rows('solo_macros_copy_copy') ): the_row();?>
							<?php the_sub_field('termina'); ?>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</span></td>
				</tr>
				</tbody>
				</table>

		</div> <!-- End Table -->








		</div>
	</section>
</section>
<?php get_footer(); ?>