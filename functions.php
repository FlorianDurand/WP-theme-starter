<?php

define('THEME_PATH',    get_template_directory()      );
define('THEME_URL',     get_template_directory_uri()  );
define('CSS_URL',       THEME_URL . '/assets/styles/' );
define('JS_URL',        THEME_URL . '/assets/scripts/');
define('IMAGES_URL',    THEME_URL . '/assets/images/' );
define('FAVICON_URL',   THEME_URL . '/static/favicon/');

if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}

foreach (glob(THEME_PATH . '/includes/*.php') as $file) include_once $file;

