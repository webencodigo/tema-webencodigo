<?php 

get_header();

?>

<?php get_template_part('templates/header','menu'); ?>

<div class="container">

	<?php if ( have_posts() ) : ?>

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">

				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
				
			</div>
		</div>
	</div>

	<?php endif; ?>

	<!-- Fila con columnas -->
	<div class="row">
		<div class="col-md-8">
			
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

			<article  class="wec_article">
				<?php the_title('<h3>','</h3>'); ?>
				<div class="row">
					<div class="col-md-4">
						<?php if( has_post_thumbnail() ){ 

							the_post_thumbnail('medium');
						
						} ?>
					</div>
					<div class="col-md-8">
						
						<?php the_excerpt(); ?>

						<p><a class="btn btn-default btn-md" href="<?php echo get_permalink() ?>" role="button">Saber más &raquo;</a></p>
					</div>
				</div>
			</article>

			<?php endwhile; ?>

		<?php endif; ?>

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