<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Menú móviles</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/wp_webencodigo">Tema webencodigo.com</a>
    </div>
    <?php
      $args = array(
        'menu' => 'principal',
        'container_id' => 'navbar',
        'container_class' => 'navbar-collapse collapse',
        'menu_class' => 'nav navbar-nav navbar-right'
      );
      wp_nav_menu( $args );
    ?>
  </div>
</nav>