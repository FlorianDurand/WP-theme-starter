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
      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php get_template_part( 'nav' ); ?>
    <div class="Page">
