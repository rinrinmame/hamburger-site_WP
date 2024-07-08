<?php

    //テーマサポート
    function custom_theme_support() {
        add_theme_support( 'html5', array(  //XHTML → HTML5に
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support( 'menus' );  //カスタムメニューの有効化
        add_theme_support( 'title-tag' );   //管理画面からタイトルタグ登録可能に
        add_theme_support( 'post-thumbnails' ); //アイキャッチ機能の有効化

        register_nav_menus( array(
        //メニューの位置
        'footer_nav' => esc_html__( 'footer navigation', 'Hamburger' ),
        'category_nav' => esc_html__( 'category navigation', 'Hamburger' ),
        ));
        add_theme_support( 'editor-styles'); //エディタスタイルの有効化
        add_editor_style();
    }
    add_action( 'after_setup_theme', 'custom_theme_support'); //必要な機能を設定しafter_setup_themeのアクションフックにて実行


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

    //pre_term_description()やterm_description()の処理に対しremovefilter()を使って機能を上書き
    //カテゴリー説明文でHTMLタグを使う
    remove_filter( 'pre_term_description', 'wp_filter_kses' ); 

    //カテゴリー説明文から自動で付与されるpタグを除去
    remove_filter( 'term_description', 'wpautop' ); 

    //カスタムメニューにliクラス追加権限付与
    function add_additional_class($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_additional_class', 1, 3);

    function Hamburger_script() {
        wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null );
        wp_enqueue_style( 'ress', get_template_directory_uri() . '/css/ress.css', array(), '5.0.2' );
        wp_enqueue_style( 'Hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery', get_theme_file_uri() . '/js/jquery-3.7.1.min.js', '3.7.1', true);
        wp_enqueue_script( 'main.js', get_theme_file_uri(). './js/main.js', array( 'jquery' ), '1.0.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'Hamburger_script' );
?>