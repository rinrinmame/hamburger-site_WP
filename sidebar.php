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
            <?php
            if ( is_active_sidebar( 'menu_widget' ) ) :
                dynamic_sidebar( 'menu_widget' );
            else:
            ?>
            <div class="widget">
                <h2>No Widget</h2>
                <p>ウィジットは設定されていません。</p>
            </div>
            <?php endif; ?>
        </nav>
    </div>
</aside>