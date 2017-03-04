<?php 

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
			
			<?php the_content(); ?>

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