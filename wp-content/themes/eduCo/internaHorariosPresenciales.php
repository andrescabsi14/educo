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


		<div class="table">


			<!-- HORARIO A
			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<h2>Horario A</h2>
			<?php the_field( "horario_a_-_horas" ); ?>

			<table class="horarios_tabla" border="1" width="100%" cellspacing="0">
				<tbody>
					<tr class="title">
						<td>Solo Básico</td>
						<td>De Básico Hasta Intermedio</td>
						<td>De Básico Hasta Avanzado</td>
						<td>De Básico Hasta Macros</td>
					</tr>
					<tr>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_basico') ): ?>
								<ul>
								<?php while( have_rows('solo_basico') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_basico') ): ?>
								<ul>
								<?php while( have_rows('solo_basico') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_basico_hasta_intermedio') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_intermedio') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_basico_hasta_intermedio') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_intermedio') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_basico_hasta_avanzado') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_avanzado') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_basico_hasta_avanzado') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_avanzado') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_basico_hasta_macros') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_macros') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_basico_hasta_macros') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_macros') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="title">
						<td></td>
						<td>Solo Intermedio</td>
						<td>De Intermedio Hasta Avanzado</td>
						<td>Solo Intermedio Hasta Macros</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_intermedio') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_intermedio') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_intermedio_hasta_avanzado') ): ?>
								<ul>
								<?php while( have_rows('de_intermedio_hasta_avanzado') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_intermedio_hasta_avanzado') ): ?>
								<ul>
								<?php while( have_rows('de_intermedio_hasta_avanzado') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_intermedio_hasta_macros') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio_hasta_macros') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_intermedio_hasta_macros') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio_hasta_macros') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="title">
						<td></td>
						<td></td>
						<td>Solo Avanzado</td>
						<td>De Avanzado Hasta Macros </td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_avanzado') ): ?>
								<ul>
								<?php while( have_rows('solo_avanzado') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_avanzado') ): ?>
								<ul>
								<?php while( have_rows('solo_avanzado') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_avanzado_hasta_macros') ): ?>
								<ul>
								<?php while( have_rows('de_avanzado_hasta_macros') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_avanzado_hasta_macros') ): ?>
								<ul>
								<?php while( have_rows('de_avanzado_hasta_macros') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="title">
						<td></td>
						<td></td>
						<td></td>
						<td>Solo Macros</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_macros') ): ?>
								<ul>
								<?php while( have_rows('solo_macros') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_macros') ): ?>
								<ul>
								<?php while( have_rows('solo_macros') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>

						</td>
					</tr>
				</tbody>
			</table>


			<!-- HORARIO B
			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<h2>Horario B</h2>
			<?php the_field( "horario_a_-_horas_copy" ); ?>

			<table class="horarios_tabla" border="1" width="100%" cellspacing="0">
				<tbody>
					<tr class="title">
						<td>Solo Básico</td>
						<td>De Básico Hasta Intermedio</td>
						<td>De Básico Hasta Avanzado</td>
						<td>De Básico Hasta Macros</td>
					</tr>
					<tr>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_basico_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_basico_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_basico_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_basico_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>

						</td>

						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_basico_hasta_intermedio_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_intermedio_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_basico_hasta_intermedio_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_intermedio_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_basico_hasta_avanzado_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_avanzado_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_basico_hasta_avanzado_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_avanzado_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_basico_hasta_macros_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_macros_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_basico_hasta_macros_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_macros_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="title">
						<td></td>
						<td>Solo Intermedio</td>
						<td>De Intermedio Hasta Avanzado</td>
						<td>Solo Intermedio Hasta Macros</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<div class="inicia">Inicia:</div> 
							<?php if( have_rows('solo_intermedio_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_intermedio_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_intermedio_hasta_avanzado_copy') ): ?>
								<ul>
								<?php while( have_rows('de_intermedio_hasta_avanzado_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_intermedio_hasta_avanzado_copy') ): ?>
								<ul>
								<?php while( have_rows('de_intermedio_hasta_avanzado_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_intermedio_hasta_macros_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio_hasta_macros_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_intermedio_hasta_macros_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio_hasta_macros_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="title">
						<td></td>
						<td></td>
						<td>Solo Avanzado</td>
						<td>De Avanzado Hasta Macros</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_avanzado_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_avanzado_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_avanzado_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_avanzado_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_avanzado_hasta_macros_copy') ): ?>
								<ul>
								<?php while( have_rows('de_avanzado_hasta_macros_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_avanzado_hasta_macros_copy') ): ?>
								<ul>
								<?php while( have_rows('de_avanzado_hasta_macros_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="title">
						<td></td>
						<td></td>
						<td></td>
						<td>Solo Macros</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_macros_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_macros_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_macros_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_macros_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
					</tr>
				</tbody>
			</table>

			<!-- HORARIO C
			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<h2>Horario C</h2>
			<?php the_field( "horario_a_-_horas_copy_copy" ); ?>

			<table class="horarios_tabla" border="1" width="100%" cellspacing="0">
				<tbody>
					<tr class="title">
						<td>Solo Básico</td>
						<td>De Básico Hasta Intermedio</td>
						<td>De Básico Hasta Avanzado</td>
						<td>De Básico Hasta Macros</td>
					</tr>
					<tr>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_basico_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_basico_copy_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_basico_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_basico_copy_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>

						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_basico_hasta_intermedio_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_intermedio_copy_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_basico_hasta_intermedio_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_intermedio_copy_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_basico_hasta_avanzado_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_avanzado_copy_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_basico_hasta_avanzado_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_avanzado_copy_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_basico_hasta_macros_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_macros_copy_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_basico_hasta_macros_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('de_basico_hasta_macros_copy_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="title">
						<td></td>
						<td>Solo Intermedio</td>
						<td>De Intermedio Hasta Avanzado</td>
						<td>Solo Intermedio Hasta Macros</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<div class="inicia">Inicia:</div> 
							<?php if( have_rows('solo_intermedio_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio_copy_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_intermedio_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio_copy_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_intermedio_hasta_avanzado_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('de_intermedio_hasta_avanzado_copy_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_intermedio_hasta_avanzado_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('de_intermedio_hasta_avanzado_copy_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_intermedio_hasta_macros_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio_hasta_macros_copy_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_intermedio_hasta_macros_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_intermedio_hasta_macros_copy_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="title">
						<td></td>
						<td></td>
						<td>Solo Avanzado</td>
						<td>De Avanzado Hasta Macros</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_avanzado_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_avanzado_copy_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_avanzado_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_avanzado_copy_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('de_avanzado_hasta_macros_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('de_avanzado_hasta_macros_copy_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('de_avanzado_hasta_macros_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('de_avanzado_hasta_macros_copy_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="title">
						<td></td>
						<td></td>
						<td></td>
						<td>Solo Macros</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<div class="inicia">Inicia:</div>
							<?php if( have_rows('solo_macros_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_macros_copy_copy') ): the_row();?>
									<?php the_sub_field('inicia'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							<br>
							<div class="finaliza">Finaliza:</div>
							<?php if( have_rows('solo_macros_copy_copy') ): ?>
								<ul>
								<?php while( have_rows('solo_macros_copy_copy') ): the_row();?>
									<?php the_sub_field('termina'); ?>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</td>
					</tr>
				</tbody>
			</table>

		</div> <!-- End Table -->








		</div>
	</section>
</section>
<?php get_footer(); ?>