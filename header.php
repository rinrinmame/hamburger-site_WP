<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>./images/favicon.png">
        <?php wp_head(); ?>
    </head>
    <body class="l-body c-grid__body"<?php body_class(); ?>>
        <header class="l-header">
            <div class="l-header__nav">
                <div class="l-header__button">
                    <h2>
                        <button class="c-button__menu u-button__header js-menu__button">Menu</button>
                    </h2>
                </div>
                <div class="c-flexbox__header">
                    <div class="l-header__title">
                        <h1 class="c-title__header">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php bloginfo( 'name' ); ?>
                        </h1>
                    </div>
                    <div class="c-search-form">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </header>