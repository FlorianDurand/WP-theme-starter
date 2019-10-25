<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php wp_title(); ?></title>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
      <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700,700i,800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php get_template_part( 'nav' ); ?>
  <div id="devis">
      <div class="img">
          <img id="anim-tree" data-link="<?php the_field( 'link', 'option' );?>" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arbre.svg" alt="">
      </div>
      <div class="link-devis"><?php the_field( 'link_content', 'option' );?> —</div>
  </div>
    <div class="Page">
