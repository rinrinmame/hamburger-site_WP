<aside class="l-sidebar">
    <div class="c-inner__sidebar">
        <div class="l-sidebar__button">
            <h2>
                <button class="c-button__menu u-button__sidebar">Menu</button>
            </h2>
            <button class="c-button__hamburger js-hamburger__button">
                <span>hamburger</span>
            </button>
        </div>
        <nav class="l-sidebar__nav p-menu">                                    
            <?php wp_nav_menu( array( 
                'theme_location' => 'category_nav',
                /*'menu_class' => 'l-footer__menu c-flexbox__footer',
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
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'item_spacing' => 'preserve'*/
            ) );
        ?>
        </nav>
    </div>
</aside>