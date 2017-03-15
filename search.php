<?php 

get_header();

?>

<?php get_template_part('templates/header','menu'); ?>

<div class="container">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">

				<?php if ( have_posts() ) : ?>
					<h1 class="page-title"><?php echo 'Resultados de búsqueda para: <span>' . get_search_query() . '</span>'; ?></h1>
				<?php else : ?>
					<h1 class="page-title"><?php echo 'Lo sentimos. No se ha encontrado nada' ?></h1>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
	<!-- Fila con columnas -->
	<div class="row">
		<div class="col-md-8">
			
			<?php
		if ( have_posts() ) :
			
			// Empezamos aquí el Loop de WordPress
			while ( have_posts() ) : the_post();

				
				the_title('<h3>','</h3>');
				the_excerpt();
				?>
				<p><a class="btn btn-default btn-md" href="<?php echo get_permalink() ?>" role="button">Saber más &raquo;</a></p>
				<?php

			endwhile; 

		endif ?>

		</div>
		<div class="col-md-4">
			<aside class="wec_aside wec_aside_nohome">
				<?php dynamic_sidebar( 'lateral' );  ?>
			</aside>
		</div>
	</div>


</div><!-- /container -->

<?php get_template_part('templates/footer','copyright'); ?>

<?php

get_footer();