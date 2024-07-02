<footer class="l-footer">
    <?php wp_nav_menu( array( 
            'theme_location' => 'global-nav',
            'menu_class' => 'l-footer__menu c-flexbox__footer',
            'container' => 'div',
            'container_class' => 'c-inner__footer',
            'fallback_cb' => 'wp_page_menu',
            'before' => '<li class="c-footer-menu">',
            'after' => '</li>',
            'link_before' => '',
            'link_after' => '',
            'echo' => true,
            'depth' => 0,
            'walker' => '',
            'theme_location' => '',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'item_spacing' => 'preserve'
        ) );
    ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>