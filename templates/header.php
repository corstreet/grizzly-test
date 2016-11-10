<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="http://localhost/wp-content/uploads/2016/11/grizz-logo-3.png"></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
      <i class="fa fa-envelope-o" aria-hidden="true"></i>
    </nav>
  </div>
</header>
