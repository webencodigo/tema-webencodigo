<?php

if ( post_password_required() ) {
	return;
}
?>

<div class="wec_area_comentarios">

	<?php
	if ( have_comments() ) { ?>
		<h2>
			<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					echo 'Hay un comentario en '. get_the_title();
				} else {
					echo 'Hay '. $comments_number . ' comentarios en '. get_the_title();
				}
			?>
		</h2>

		<ol class="wec_lista_comentarios">
			<?php
				wp_list_comments( array(
					'avatar_size' => 100,
					'style'       => 'ol',
					'short_ping'  => true,
					'reply_text'  => '<span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Comentario',
				) );
			?>
		</ol>

		<?php the_comments_pagination( array(
			'prev_text' => '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="screen-reader-text">Anterior</span>',
			'next_text' => '<span class="screen-reader-text">Siguiente</span> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>',
		) );

	}

	// Si los comentarios están cerrados y hay comentarios dejamos un aviso
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>

		<p>Los comentarios están cerrados</p>

	<?php
	}

	comment_form();

	?>

</div>
