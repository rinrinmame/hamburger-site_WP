<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

    //タイトル出力
    function Hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
        return $title;
    }
    add_filter( 'pre_get_document_title', 'Hamburger_title' );

    function Hamburger_script() {
        wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null );
        wp_enqueue_style( 'ress', get_template_directory_uri() . '/css/ress.css', array(), '5.0.2' );
        wp_enqueue_style( 'Hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery', get_theme_file_uri() . '/js/jquery-3.7.1.min.js', '3.7.1', false);
        wp_enqueue_script( 'main.js', get_theme_file_uri(). './js/main.js', array( 'jquery' ), '1.0.0', false);
    }
    add_action( 'wp_enqueue_scripts', 'Hamburger_script' );
?>