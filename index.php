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
      <article  class="wec_article">
        <h3>Noticia de prueba 1 con foto de té</h3>
        <div class="row">
        <div class="col-md-4">
          <img src="http://webencodigo.com/wp-content/uploads/2017/02/te.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default btn-md" href="#" role="button">Saber más &raquo;</a></p>
        </div>
        </div>
      </article>

      <article class="wec_article">
        <h3>Noticia de prueba 1 con foto de té</h3>
        <div class="row">
        <div class="col-md-4">
          <img src="http://webencodigo.com/wp-content/uploads/2017/02/maceta.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Quisque rutrum. Aenean imperdiet.</p>
          <p><a class="btn btn-default btn-md" href="#" role="button">Saber más &raquo;</a></p>
        </div>
        </div>
      </article>

      <article  class="wec_article">
        <h3>Noticia de prueba 1 con foto de té</h3>
        <div class="row">
        <div class="col-md-4">
          <img src="http://webencodigo.com/wp-content/uploads/2017/02/sofa.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Quisque rutrum. Aenean imperdiet.</p>
          <p><a class="btn btn-default btn-md" href="#" role="button">Saber más &raquo;</a></p>
        </div>
        </div>
      </article>
    </div>
    <div class="col-md-4">
      <aside class="wec_aside">
        <h2>Sidebar con Widgets</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Quisque rutrum. Aenean imperdiet.</p>
      </aside>
    </div>
  </div>
</div><!-- /container -->

<?php get_template_part('templates/footer','copyright'); ?>

<?php

get_footer();