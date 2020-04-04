<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php wp_title(); ?></title>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
      <!-- <script
              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script> -->
      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php get_template_part( 'nav' ); ?>

    <div class="Page">
