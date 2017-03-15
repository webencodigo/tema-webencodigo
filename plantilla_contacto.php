<?php 

/* Template name: Plantilla contacto */

get_header();

?>

<?php get_template_part('templates/header','menu'); ?>

<div class="container">

	<?php while ( have_posts() ) : the_post(); ?>

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">

				<?php the_title( '<h1>', '</h1>' ); ?>
				
			</div>
		</div>
	</div>
	<!-- Fila con columnas -->
	<div class="row">
		<div class="col-md-8">
			
			<form class="form-horizontal">
				<div class="form-group">
				<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" placeholder="Nombre">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="Email">
					</div>
				</div>

				<div class="form-group">
					<label for="comentario" class="col-sm-2 control-label">Comentario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="comentario" placeholder="Comentario">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Enviar</button>
					</div>
				</div>
			</form>

		</div>
		<div class="col-md-4">
			<aside class="wec_aside wec_aside_nohome">
				<?php dynamic_sidebar( 'lateral' );  ?>
			</aside>
		</div>
	</div>

	<?php endwhile; // Fin de el loop. ?>

</div><!-- /container -->

<?php get_template_part('templates/footer','copyright'); ?>

<?php

get_footer();