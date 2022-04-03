<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

    //タイトル出力
    // function hamburger_title( $title ) {
    //     if ( is_front_page() && is_home() ) { //トップページなら
    //         $title = get_bloginfo( 'name', 'display' );
    //     } elseif ( is_singular() ) { //シングルページなら
    //         $title = single_post_title( '', false );
    //     }
    //         return $title;
    //     }
    // add_filter( 'pre_get_document_title', 'hamburger_title' );

    function hamburger_script() {
        wp_enqueue_style( 'destyle', '//cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css', array() );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'script', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array() );
        wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array() );
        wp_enqueue_script( 'script-name', get_template_directory_uri() . '/css/style.js', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    add_filter( 'show_admin_bar', '__return_false' );