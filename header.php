<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <?php if( is_singular()) wp_enqueue_script( "comment-reply" ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( 'l-body c-grid__body' ); ?>>
        <?php wp_body_open(); ?>
        <header class="l-header c-background__header c-grid__body__child--header">
            <div class="l-header__nav">
                <div class="l-header__button">
                    <h2>
                        <button class="c-button__menu u-button__header js-menu__button">Menu</button>
                    </h2>
                </div>
                <div class="c-flexbox__header">
                    <div class="l-header__title">
                        <h1 class="c-title__header">
                            <button class="c-button__home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></button>
                        </h1>
                    </div>
                    <div class="p-search-form">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </header>