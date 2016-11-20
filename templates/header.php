<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 nav-wrap">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">GRIZZLY</a>
        <nav class="nav-primary">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </nav>
      </div>
    </div>
  </div>
</header>
