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
      <div class="container">
        <div class="content row">
          <div class="col-md-9">
            <h3 class="header-text"><?php the_field('header_text'); ?></h3>
            <?php //include Wrapper\template_path(); ?>
          </div>
        </div>
      </div>
    </section>
    <section id="section__email">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="email--content">
              <div class="border-bottom"></div>
              <div class="email--question">Is Grizzly right for you?</div>
              <div class="email--form-instructions">If you'd like to be considered for a position here at Grizzly, please send us an email using the form below.</div>   
              <input type="text" class="email__input" placeholder="email@example.com">
              <i class="fa fa-chevron-right input-chevron" aria-hidden="true"></i> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="instafeed">
      <div class="container-fluid">
        <div class="row instarow">
          <?php

              $access_token="330001622.54da896.6aa35b99a4334668a282df8727c31da5";
              $client_id="";
              $photo_count=20;
              $tag="sunsetcliffs";
                   
              // $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
              // $json_link.="access_token={$access_token}&count={$photo_count}";

              $json_link="https://api.instagram.com/v1/tags/{$tag}/media/recent?";
              $json_link.="access_token={$access_token}&count={$photo_count}";

              $json = file_get_contents($json_link);
              $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);


              foreach ($obj['data'] as $post) {

                $pic_text=$post['caption']['text'];
                $pic_link=$post['link'];
                $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
                
                 
                echo "<div class='item_box'>";        
                    echo "<a href='{$pic_link}' target='_blank'>";
                        echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
                    echo "</a>";
                echo "</div>";
              }
          ?>
        </div>
      </div>
    </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
