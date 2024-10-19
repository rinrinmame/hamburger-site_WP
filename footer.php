<footer class="l-footer c-background__footer c-grid__body__child--footer">
    <div class="c-inner__footer">
        <?php wp_nav_menu( array( 
                'theme_location' => 'footer_nav',
                'container' => '',
                'menu_class' => 'l-footer__menu c-flexbox__footer',
                'menu_id' => '',
                'add_li_class' => 'c-footer-menu',
                'echo' => true,
                'depth' => 0,
                'walker' => '',
                'item_spacing' => 'preserve',
            ) );
        ?>
        <small class="c-text u-text__small">Copyright:RaiseTech</small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>