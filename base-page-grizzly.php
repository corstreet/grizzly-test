<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <section id="hero">
      <div class="wrap container" role="document">
        <div class="content row">
          <h3 class="header-text"><?php the_field('header_text'); ?></h3>
          <?php //include Wrapper\template_path(); ?>
        </div>
      </div>
    </section>
    <section id="section__email">
      <div class="wrap container">
        <div class="email--content">
          <div class="border-bottom"></div>
          <div class="email--question">Is Grizzly right for you?</div>
          <div class="email--form-instructions">If you'd like to be considered for a position here at Grizzly, please send us an email using the form below.</div>   
          <input type="text" class="email__input" placeholder="email@email.com">
          <i class="fa fa-chevron-right input-chevron" aria-hidden="true"></i> 
        </div>
      </div>
    </section>
    <section id="instagram">
    </section>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
