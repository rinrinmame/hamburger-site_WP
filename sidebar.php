<aside class="l-sidebar">
<?php if(is_user_logged_in()): ?>
    <div class="c-inner__sidebar u-login">
<?php else : ?>
    <div class="c-inner__sidebar">
<?php endif; ?>
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
                    'menu_class' => 'p-menu__parent c-inner__menu',
                    'menu_id' => '',
                    'container' => 'ul',
                    'add_li_class' => 'c-item__sidebar',
                    'echo' => true,
                    'depth' => 0,
                    'walker' => '',
                    'item_spacing' => 'preserve',
                ) );
            ?>
        </nav>
    </div>
</aside>