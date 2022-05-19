<?php

add_theme_support( 'title-tag' );

wp_enqueue_style( 'style', get_stylesheet_uri() );

//ajouter une nouvelle zone de menu à mon thème
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Menu Header' ));
  }
  add_action( 'init', 'register_my_menu' );

  wp_enqueue_style( 'custom', get_template_directory_uri() . 'http://fonts.cdnfonts.com/css/boecklins-universe' );

  function ThemeMucha_widgets_init(){

    register_sidebar( array(
        'id' => 'blog-sidebar',
        'name' => 'Blog',
        'before_widget'  => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

}

add_action( 'widgets_init', 'ThemeMucha_widgets_init' );