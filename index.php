<?php 

get_header();

?>
<header>

  <?php get_template_part('templates/header','menu'); ?>

    <!-- Sección Jumbotron para un mensaje llamativo o Call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hola Mundo!</h1>
        <p>Esta es una plantilla hecha para la serie de tutoriales de Hacer un tema o plantilla para WordPress desde cero. Ya vemos que es muy fácil añadir Bootstrap a un tema para ya ir creando la maquetación. Y además Responsive!</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Saber más &raquo;</a></p>
      </div>
    </div>
</header>

    <div class="container">
  <!-- Fila con columnas -->
  <div class="row">
    <div class="col-md-8">
      <h2>Últimas noticias de webencodigo.com</h2>
      <hr>

      <?php 

        $args = array(
          'posts_per_page'   => 3,
        );
        $posts_portada = get_posts($args);

      ?>

      <?php 
      
        foreach($posts_portada as $post){ 

        setup_postdata( $post )

      ?>

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

      <?php } //Fin del foreach ?>

    </div>
    <div class="col-md-4">
      <aside class="wec_aside">
        <?php dynamic_sidebar( 'lateral' );  ?>
      </aside>
    </div>
  </div>
</div><!-- /container -->

<?php get_template_part('templates/footer','copyright'); ?>

<?php

get_footer();